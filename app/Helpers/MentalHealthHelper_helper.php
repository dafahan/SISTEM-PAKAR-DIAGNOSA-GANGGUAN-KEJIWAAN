<?php 
// app/Helpers/MentalHealthHelper.php


if (!function_exists('diagnose_mental_health')) {
    function diagnose_mental_health($symptoms)
    {
        $ruleModel = new \App\Models\RuleModel();

        // Fetch all rules from the database
        $rules = $ruleModel->findAll();
        foreach ($rules as &$rule) {
            $rule['executed'] = false;
        }
        // Initialize an empty array to store diagnosed diseases
        $diagnosedDiseases = [];

        // Call the rule execution engine
        rule_execution_engine($symptoms, $rules, $diagnosedDiseases);

        return $diagnosedDiseases;
    }

    function rule_execution_engine($symptoms, &$rules, &$diagnosedDiseases)
    {
        // Iterate through the rules
        foreach ($rules as &$rule) {
            // Check if the rule has not been executed and all prerequisites are met
            if (!$rule['executed'] && are_all_symptoms_present($symptoms, explode(' and ', $rule['kode_gejala']))) {
                // Mark the rule as executed
                $rule['executed'] = true;
    
                // Add the disease to the diagnosed list
                $diagnosedDiseases[] = $rule['kode_penyakit'];
    
                // Recursively call the engine to check for new conclusions
                rule_execution_engine($symptoms, $rules, $diagnosedDiseases);
            }
        }
    }
    

    function are_all_symptoms_present($observedSymptoms, $requiredSymptoms)
    {
        // Check if all required symptoms are present in the observed symptoms
        return count(array_intersect($observedSymptoms, $requiredSymptoms)) === count($requiredSymptoms);
    }
}
