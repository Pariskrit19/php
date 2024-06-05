<!DOCTYPE html>
<html>
<body>

<?php
require 'vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

// This assumes that you have placed the Firebase credentials in the same directory
// as this PHP file.


$factory = (new Factory)
     ->withServiceAccount(__DIR__ . '/firebase.json');
     

$database = $factory->createDatabase();
var_dump($database)








/*****************************************************************/

// use Google\Cloud\Firestore\FirestoreClient;

// $firestore = new FirestoreClient([
//     'projectId' => 'mall-management-system-a294e',
// ]);

// $documentReference = $firestore->collection('User')->document('sPvJJYhLdSutOhOpkDvH');
// $snapshot = $documentReference->snapshot();
// if ($snapshot->exists()){
//     print_r($snapshot->data());
// }
// $documentReference->set([
//     'username' => 'Pari'
// ], ['merge' => true]);

// $documents = $collectionReference->documents();
// print_r($snapshot)
// foreach ($documents as $document) {
//     if ($document->exists()) {
//         printf('Document data for document %s:' . PHP_EOL, $document->id());
//         print_r($document->data());
//         printf(PHP_EOL);
//     } else {
//         printf('Document %s does not exist!' . PHP_EOL, $document->id());
//     }
// }
?> 

</body>
</html>
