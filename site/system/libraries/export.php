<?php  /*
* Excel library for Code Igniter applications
* Based on: Derek Allard, Dark Horse Consulting, www.darkhorse.to, April 2006
* Tweaked by: Moving.Paper June 2013
*/
class Export{
    
    function to_excel($array, $filename) {
        header('Content-type: application/vnd.ms-excel');
        header('Content-Disposition: attachment; filename='.$filename.'.csv');

       
        $h = array();
        foreach($array->result_array() as $row){
            foreach($row as $key=>$val){
                if(!in_array($key, $h)){
                 $h[] = $key;   
                }
                }
                }
                //echo the entire table headers
               // echo '<table><tr>';
                foreach($h as $key) {
                    $key = ucwords($key);
                   // echo '<th>'.$key.'</th>';
					echo $key.",";
                }
               // echo '</tr>';
			 //  echo '\n';
                
                foreach($array->result_array() as $row){
					 echo "\n";
                    // echo '<tr>';
                    foreach($row as $val)
                         $this->writeRow($val);   
                }
               // echo '</tr>';
               // echo '</table>';
			    echo "\n";
                
            
        }
    function writeRow($val) {
                //echo '<td>'.utf8_decode($val).'</td>';    
				 echo utf8_decode($val).",";    
    }

}

?>