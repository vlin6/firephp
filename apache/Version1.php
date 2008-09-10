<?php
/* ***** BEGIN LICENSE BLOCK *****
 * Version: MPL 1.1/GPL 2.0/LGPL 2.1
 *
 * The contents of this file are subject to the Mozilla Public License Version
 * 1.1 (the "License"); you may not use this file except in compliance with
 * the License. You may obtain a copy of the License at
 * http://www.mozilla.org/MPL/
 *
 * Software distributed under the License is distributed on an "AS IS" basis,
 * WITHOUT WARRANTY OF ANY KIND, either express or implied. See the License
 * for the specific language governing rights and limitations under the
 * License.
 *
 * The Initial Developer of the Original Code is Christoph Dorn.
 *
 * Portions created by the Initial Developer are Copyright (C) 2006
 * the Initial Developer. All Rights Reserved.
 *
 * Contributor(s):
 *     Christoph Dorn <christoph@christophdorn.com>
 *
 * Alternatively, the contents of this file may be used under the terms of
 * either the GNU General Public License Version 2 or later (the "GPL"), or
 * the GNU Lesser General Public License Version 2.1 or later (the "LGPL"),
 * in which case the provisions of the GPL or the LGPL are applicable instead
 * of those above. If you wish to allow use of your version of this file only
 * under the terms of either the GPL or the LGPL, and not to allow others to
 * use your version of this file under the terms of the MPL, indicate your
 * decision by deleting the provisions above and replace them with the notice
 * and other provisions required by the GPL or the LGPL. If you do not delete
 * the provisions above, a recipient may use your version of this file under
 * the terms of any one of the MPL, the GPL or the LGPL.
 *
 * ***** END LICENSE BLOCK ***** */


require_once('./../Libraries/FirePHPCore/lib/FirePHPCore/fb.php');


$data = $_SERVER;
$data[] = new FirePHP();

//$data = array('VarName'=>'VarValue22','var2'=>'val2');

if($_GET['var']==1) {


/*
header('X-FirePHP-Data-100000000001:	{');
header('X-FirePHP-Data-300000000001:	"FirePHP.Firebug.Console":[');
header('X-FirePHP-Data-399999999999:	["__SKIP__"]],');
header('X-FirePHP-Data-999999999999:	"__SKIP__":"__SKIP__"}');
header('X-FirePHP-Data-368615080800:	["LOG",["PHP:$list From combien_services.php[32] getListTirage()",[{"libelle":"lundi 3 novembre 2008","date":"20081103","numtir":"2008094","DFOR":"20090103"},{"libelle":"samedi 1 novembre 2008","date":"20081101","numtir":"2008093","DFOR":"20090101"},{"libelle":"mercredi 29 octobre 2008","date":"20081029","numtir":"2008090","DFOR":"20081229"},{"libelle":"mercredi 29 octobre 2008","date":"20081029","numtir":"2008091","DFOR":"20081229"},{"libelle":"lundi 27 octobre 2008","date":"20081027","numtir":"2008089","DFOR":"20081227"},{"libelle":"lundi 20 octobre 2008","date":"20081020","numtir":"2008086","DFOR":"20081220"},{"libelle":"mercredi 15 octobre 2008","date":"20081015","numtir":"2008084","DFOR":"20081215"},{"libelle":"lundi 13 octobre 2008","date":"20081013","numtir":"2008083","DFOR":"20081213"},{"libelle":"mercredi 8 octobre 2008","date":"20081008","numtir":"2008081","DFOR":"20081208"},{"libelle":"mercredi 30 juillet 2008","date":"20080730","numtir":"2008061","DFOR":"20080929"}]]],');
*/

foreach( file('Version1Headers.txt') as $line ) {
  if( $line = trim($line) ) {
    
    $line = substr_replace($line,':',27,0);

    header($line);
  }
}


//  fb('Hello World');

//  fb('Log message',FirePHP::LOG);
//  fb('Info message',FirePHP::INFO);
//  fb('Warn message',FirePHP::WARN);
//  fb('Error message',FirePHP::ERROR);

} else {

  fb($data);

  fb($data,'$_SERVER',FirePHP::DUMP);  
}



//header('FirePHP-data: '.substr($data_str,0,strlen($data_str)/2));
//header('FirePHP-data-1: '.substr($data_str,strlen($data_str)/2));

//header('X-FirePHP-ProcessorURL: http://'.$_SERVER['HTTP_HOST'].substr($_SERVER['SCRIPT_NAME'],0,-4).'-Processor.js');

//header('X-FirePHP-RendererURL: http://'.$_SERVER['HTTP_HOST'].substr($_SERVER['SCRIPT_NAME'],0,-4).'-Renderer.js');


require_once('TVarDumper.php');

print TVarDumper::dump($data, 10, true);

var_dump($data);

?>

<script type="application/x-javascript" src="jquery.js"></script>

<p><a href="#" onClick="$.get('Version1.php?var=1');">Version1.php?var=1</a></p>
<p><a href="#" onClick="$.get('ConsoleTest.php');">ConsoleTest.php</a></p>
<p><a href="#" onClick="$.get('ZendTest.php');">ZendTest.php</a></p>
