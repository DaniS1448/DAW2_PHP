<?php
class User_model extends CI_Model{
    public function createUser($name, $dni, $cityBorn){
        
        $dniUser = R::findOne('user', 'dni=?', [$dni]);
        
        $existeDNI = ($dniUser != null);
        $existeName = $name != null;
        
        if (!$existeDNI && $existeName) {
            $user = R::dispense('user');
            $user -> name = $name;
            $user -> dni = $dni;
            $user -> born = $cityBorn;
            R::store($user);
        } else if ($existeDNI){
            throw new Exception('Error, DNI already exist');
        } else if (!$existeName){
            throw new Exception('Error, name cannot be empty');
        }
    }
    
    public function getUsers(){
        return R::findAll('user');
    }
    
    public function getUserById($id){
        return R::load('user', $id);
    }
    
    //public function regTravelleds($user, $citiesTravelled, $idsTravelled){
        
//         foreach ($citiesTravelled as $cityTravelled){
//             $travel = R::dispense('travelled');
//             $travel->user = $user;
//             $travel->city = $cityTravelled;
//             R::store($travel);
//         }

   
    public function regTravelleds($user, $idsTravelled){
        $comunes = [];
        foreach ($user->ownTravelledList as $travel) {
            
            if (! in_array($travel->city_id, $idsTravelled)) {
                R::store($user);
                R::trash($travel);
            } else {
                $comunes[] = $travel->city_id;
            }
        }
        
        foreach (array_diff($idsTravelled, $comunes) as $idTravelNew) {
            
            $city = R::load('city', $idTravelNew);
            
            $travel = R::dispense('travelled');
            $travel->user = $user;
            $travel->city = $city;
            
            R::store($user);
            R::store($travel);
        }
    }
}
?>