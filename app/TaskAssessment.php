<?php

namespace App;

class TaskAssessment
{
    static public function getAssessmentDeveloper($language): int
    {
        switch ($language)
        {
            case 'Php':
                $phpDeveloper = new PhpDeveloper('Anastasia', 24, 'Middle');
                return $phpDeveloper->evaluateTheTask();
            case 'Java':
                $javaDeveloper = new JavaDeveloper('Vlad', 20, 'Junior');
                return $javaDeveloper->evaluateTheTask();
            case 'Python':
                $pythonDeveloper = new PythonDeveloper();
                return $pythonDeveloper->evaluateTheTask();
            case 'Cpp':
                $cppDeveloper = new CppDeveloper();
                return $cppDeveloper->evaluateTheTask();
            default:
                $language = 0;
                break;
        }
        return $language;
    }


    static public function generateAssessment($language): int
    {
        $projectManager = new ProjectManager();
        return $projectManager->evaluateTask(self::getAssessmentDeveloper($language));
    }
}