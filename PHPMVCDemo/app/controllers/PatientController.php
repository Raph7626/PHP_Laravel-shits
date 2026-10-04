<?PHP 
    require_once APP_ROOT . '/app/services/PatientService.php';

    class PatientController{
        public function add(){
            include_once APP_ROOT . '/app/views/patients/add.php';
        }
        
        public function store(){
            $name = $_POST['name'];
            $gender = $_POST['gender'];
            $patient = new Patient(null, $name, $gender);

            $patientService = new PatientService();
            $patientService->addPatient($patient);

            header('Location: ?controller=home');
            

        }

        public function edit($id){
            if(isset($id)){
                $patientService = new PatientService();
                $patient = $patientService->getPatientByID($id);

                include APP_ROOT . '/app/views/patients/edit.php';
            }
            else{
                echo 'Id is null';
            }
        }


    public function update($id){
        $name = $_POST['name'];
        $gender = $_POST['gender'];

        $patient_new = new Patient($id, $name, $gender);
        $patientService = new PatientService();
        $patientService->updatePatient($patient_new);
        header('Location: ?controller=home');

    }    
    
    public function destroy($id){
    $patientService = new PatientService();
    $patient = $patientService->getPatientByID($id);
    $patientService->deletePatient($patient);

    header('Location: ?controller=home');
    }

    public function delete($id){
      if(isset($id)){
                $patientService = new PatientService();
                $patient = $patientService->getPatientByID($id);

                include APP_ROOT . '/app/views/patients/delete.php';
            }
            else{
                echo 'Id is null';
            }
        }

}

    

?>