<?php
// if ($this->isHttpException($e)) {

$statusCode = $e->getStatusCode();
if($statusCode=='404')
{
    return response()->view('404');
} 
// }
return parent::render($request, $e);
echo $e;
?>