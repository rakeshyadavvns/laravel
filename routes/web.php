<?php
use App\Models\loginform;
use App\Models\Home;
use App\Models\Search;
use App\Models\contact;
use App\Models\sessionmaster;
use App\Models\classmaster;
use App\Models\delete;
use App\Models\question;
use App\Models\Update;
use App\Models\testover;
use App\Models\admin;
use App\Http\Controllers\TestController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/ctest', [TestController::class, 'show']);

Route::get('/test', function (Request $request)
 {
	
    return "Test";
	 
});
/******************************************************************************/


Route::get('/admin', function (Request $request)
 {
	 try{
		 return view('admin');
	 }
	 catch(\Exception $f){
		 $error=array("status"=>"failed","error"=>$f->getMessage());
		 echo $f->getMessage();
    return view('admin');
	 }
});
/******************************************************************************/
Route::post('/admin', function (Request $request)
{
	
	$request["username"];
	$request["password"];
	$pi = admin::create($request->all());
	
	$pi->save();
	$pi["status"]="ok";
	return view('admin',['result'=>'success']);
		 }
);
	


/******************************************************************/
Route::post('/question', function (Request $request)
 {
	 $qno=(isset($request["qno"]))? $request["qno"]:1;
	 $cmd=(isset($request["command"]))? $request["command"]:1;
	 $score=(isset($request["score"]))? $request["score"]:0;
	 $opt=0;
	 $result="";
	 if($cmd=="Next")
	 {
		// $qno++;
		 if($qno>5)
						 
		return view('testover',['result'=>$result,'score'=>$score]);
		 	 $questions=question::where("questionno",$qno)->get()[0];
	
	
		 return view('question',['obj'=> $questions,'result'=>$result,'score'=>$score]);
	 }
	 if($cmd=="Submit")
	 {
		 
		 	 $questions=question::where("questionno",$qno)->get()[0];
			 $opt=$request["opt"];
			 $correctanswer=$questions->correctanswer;
			 if($correctanswer  == $opt)
			 
			 {
				 $result="Correct";
				 $score++;
			 }
			 else 
			 {
						$result="Wrong";
			 }
	
	
	 $qno++;
		 if($qno>14)
		return view('testover',['result'=>$result,'score'=>$score]);
		 	 $questions=question::where("questionno",$qno)->get()[0];
	
	
	
	
	$questions=question::where("questionno",$qno)->get()[0];
	//$count = question::where('questionno','=','$qno')->count();
	
		 return view('question',['obj'=> $questions,'result'=>$result,'score'=>$score]);
		 
		
		 
	 }
	// print($questionno);

	 }
	
);





Route::get('/question', function (Request $request)
 {
	 $qno=(isset($request["qno"]))? $request["qno"]:0;
	// print($questionno);
	 $questions=question::where("questionno",$qno)->get()[0];
	
	
		 return view('question',['obj'=> $questions,'result'=>'','score'=>0]);
	 }
	
);

Route::Post ('/search', function (Request $request)
{    
    $request["id"];
	$request["emailid"];
	$request["password"];
	
	$pi->save();
	$pi["status"]="ok";
	return view('search',['result'=>'success']);
		 }
);


/*************************************************/
Route::get('/loginform', function (Request $request)
 {
	 try{
		 return view('loginform');
	 }
	 catch(\Exception $f){
		 $error=array("status"=>"failed","error"=>$f->getMessage());
		 echo $f->getMessage();
    return view('loginfrom');
	 }
});
/******************************************************************************/
Route::post('/loginform', function (Request $request)
{
	
	$request["emailid"];
	$request["password"];
	$pi = LoginForm::create($request->all());
	
	$pi->save();
	$pi["status"]="ok";
	return view('loginform',['result'=>'success']);
		 }
);
	
	/******************************************************************************/
	
	
	
	Route::get('/home', function (Request $request)
 {
	
		 return view('Home');
	 }
	
);
/*******************************************************************************/
	Route::get('/teststart', function (Request $request)
 {
	
		 return view('teststart	');
	 }
	
);
/******************************************************************************/
Route::get ('/search', function (Request $request)
{
	
	
	
	$id=$request["id"];

	$rm=loginform::where("id",$id)->get()[0];

    $emailid=$rm->emailid." ";
    $password=$rm->password." ";
	//echo "<br>$emailid $password <br>";
	//$rm=loginform::where('emailid','like',$emailid)->where('password','<=',$password)->orderBy('emailid','asc')->get();;
	
	return view('search',['result'=>$id,'obj'=> $rm]);
	
}
);
Route::Post ('/search', function (Request $request)
{    
    $request["id"];
	$request["emailid"];
	$request["password"];
	
	$pi->save();
	$pi["status"]="ok";
	return view('search',['result'=>'success']);
		 }
);


/***************************************************************************/
	Route::get('/aboutus', function (Request $request)
 {
	
		 return view('aboutus');
	 }
	
);
/***************************************************************************/

	Route::get('/gallery', function (Request $request)
 {
	
		 return view("gallery");
	 }
	
);
/**************************************************************************/

	Route::get('/contact', function (Request $request)
 {
	
		 return view("contact");
	 }
	
);
/***********************************************************************************/
	Route::get('/footer', function (Request $request)
 {
	
		 return view("footer");
	 }
	
);
/*************************************************************************************/
Route::get('/test', function (Request $request)
 {
	
		 return view("test");
	 }
	
);
/******************************************************************************************/
Route::get('/contact', function (Request $request)
 {
	 try{
		 return view('contact');
	 }
	 catch(\Exception $f){
		 $error=array("status"=>"failed","error"=>$f->getMessage());
		 echo $f->getMessage();
    return view('contact');
	 }
});
/******************************************************************************/
Route::post('/contact', function (Request $request)
{
	
	$request["firstname"];
	$request["lastname"];
	$pi = contact::create($request->all());
	
	$pi->save();
	$pi["status"]="ok";
	return view('contact',['result'=>'success']);
		 }
);
/*********************************************************************************/	

Route::get('/sessionmaster', function (Request $request)
 {
	 try{
		 return view('sessionmaster');
	 }
	 catch(\Exception $f){
		 $error=array("status"=>"failed","error"=>$f->getMessage());
		 echo $f->getMessage();
    return view('sessionmaster');
	 }
});
/***********************************************************************/
Route::post('/sessionmaster', function (Request $request)
{
	
	$request["firstname"];
	$request["lastname"];
	$pi = sessionmaster::create($request->all());
	
	$pi->save();
	$pi["status"]="ok";
	return view('sessionmaster',['result'=>'success']);
		 }
);
/********************************************************************/
Route::get('/classmaster', function (Request $request)
 {
	 try{
		 return view('classmaster');
	 }
	 catch(\Exception $f){
		 $error=array("status"=>"failed","error"=>$f->getMessage());
		 echo $f->getMessage();
    return view('classmaster');
	 }
});
/************************************************************************/
Route::post('/classmaster', function (Request $request)
{
	
	$request["firstname"];
	$request["lastname"];
	$pi = classmaster::create($request->all());
	
	$pi->save();
	$pi["status"]="ok";
	return view('classmaster',['result'=>'success']);
		 }
);
/*********************************************************************************/

/*************************************************************************/
Route::get ('/allsession', function (Request $request)
 {
		$allsessions=sessionmaster::all()->sortByDesc("sno");
		 return view("allsessions",['sessions'=>$allsessions]);
	 }
	
);





/*********************************************************************************/
Route::get ('/showclasses', function (Request $request)
{
	
	
	
	$sessionno=$request["sessionno"];

	$classes=classmaster::where("sessionno",$sessionno)->get();
echo $sessionno;
echo count($classes);
    
			return view('showclasses',['classes'=>$classes]);
	
}
);
/*************************************************************************************/
Route::get ('/update', function (Request $request)
{
		try {
     $sno=$request["sessionno"];
	 echo $sno;
	
	$session=sessionmaster::where("sno",$sno)->get()[0];
	
  return view('updated',['session'=>$session]);;
		
} catch (\Exception $e) 
{

echo $e->getMessage();
echo "Error";
	return view('updated',['result'=>$e->getMessage()]);
}
});
/*************************************************************************************/

Route::Post ('/update', function (Request $request)
{    
    $request["sno"];
	$request["sessionfrom"];
	$request["sessionto"];
	$request["comments"];
	$request["enteredby"];
	
	
	return view('updated',['result'=>'success']);
		 }
);
/*************************************************************************************/

Route::get ('/delete', function (Request $request)
	{
		$sno="";
		$sessionfrom="";
		$sessionto="";
		$comments="";
		$enteredby="";
		try {
$sno=$request["sno"];
	$session=sessionmaster::where("sno",$sno)->get()[0];
	$sessionfrom=$session->sessionfrom;
		$sessionto=$session->sessionto;
	
		$comments=$session->comments;
		$enteredby=$session->enteredby;
		
	 return view('delete',['sno'=>$sno,'sessionfrom'=>$sessionfrom,'sessionto'=>$sessionto,'comments'=>$comments,'enteredby'=>$enteredby]);

} catch (\Exception $e) {

   // return $e->getMessage();
	return view('delete',['sno'=>$sno,'sessionfrom'=>$sessionfrom,'sessionto'=>$sessionto,'comments'=>$comments,'enteredby'=>$enteredby,'result'=>'successfull']);

return view('delete',['result'=>'successfull']);
		}
	}
);
Route::Post ('/delete', function (Request $request)
{    
   
		$sno="";
		$sessionfrom="";
		$sessionto="";
		$comments="";
		$enteredby="";
		 try {
$sno=$request["sno"];
			$session=sessionmaster::where("sno",$sno)->get()[0];
	$sessionfrom=$session->sessionfrom;
		$sessionto=$session->sessionto;
	
		$comments=$session->comments;
		$enteredby=$session->enteredby;

echo "<br>Delete successfull $sno<br>";
	
	$session->delete();
	 return view('delete',['sno'=>$sno,'sessionfrom'=>$sessionfrom,'sessionto'=>$sessionto,'comments'=>$comments,'enteredby'=>$enteredby]);

} catch (\Exception $e) {

  // echo $e->getMessage();
	return view('delete',['sno'=>$sno,'sessionfrom'=>$sessionfrom,'sessionto'=>$sessionto,'comments'=>$comments,'enteredby'=>$enteredby]);


return view('delete',['result'=>'successfull']);
	}	 }
);










/***********************************************************/