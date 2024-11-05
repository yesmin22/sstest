<?php
namespace App\api_trait;
trait ApiStatusTrait{
    protected function success(){
        $message="This is Success Message";
        return response()->json(['success_message'=>$message]);
    }
    protected function failed(){
        $message="This is Failed Message";
        return response()->json(['failed_message'=>$message]);
    }
    protected function benchmarkchecker(){
        $message="This is Checker Message";
        return response()->json(['checker_message'=>$message]);
    }
}
