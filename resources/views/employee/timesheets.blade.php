@extends('layouts.app_employee')
@section('title','Create Timesheets')
@section('content')
<!-- <INPUT type="button" value="Add Row" onclick="addRow('dataTable')" />

<INPUT type="button" value="Delete Row" onclick="deleteRow('dataTable')" />

<TABLE id="dataTable" width="350px" border="1">
    <TR>
        <TD><INPUT type="checkbox" name="chk"/></TD>
        <TD><INPUT type="text" name="txt"/></TD>
        <TD>
            <SELECT name="country">
                <OPTION value="in">India</OPTION>
                <OPTION value="de">Germany</OPTION>
                <OPTION value="fr">France</OPTION>
                <OPTION value="us">United States</OPTION>
                <OPTION value="ch">Switzerland</OPTION>
            </SELECT>
        </TD>
    </TR>
</TABLE> -->
<div class="container" style="overflow-x:auto;" >    
    <table class="table table-fluid table-hover table-responsive" id = "myTable">
        <thead>
            <tr>
                <th></th>
                <th></th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
                <th>8</th>
                <th>9</th>
                <th>10</th>
                <th>11</th>
                <th>12</th>
                <th>13</th>
                <th>14</th>
                <th>15</th>
                <th>total</th>
                
            </tr>
        </thead> 
        <tbody id="dataTable">
                <tr>
                    <td><input type="checkbox" name="chk" style="background-color: white; font-size: 18px; width: 70px; text-align: center;"/></td>
                    <td><select name = "value" style="background-color: white; font-size: 18px; width: 100px; height:32px; text-align: center;" ><option value="">Project</option>
                    <option value="">Leave</option><option value="">Holiday</option>
                        </select></td>
                    <td><input type="text" class='txtCal1'  name="" style="background-color: white; font-size: 18px; width: 70px; text-align: center;"/></td>
                    <td><input type="text" class='txtCal2'  name="" style="background-color: white; font-size: 18px; width: 70px; text-align: center;"/></td>
                    <td><input type="text" class='txtCal3' name="" style="background-color: white; font-size: 18px; width: 70px; text-align: center;"/></td>
                    <td><input type="text" class='txtCal4'  name="" style="background-color: white; font-size: 18px; width: 70px; text-align: center;"/></td>
                    <td><input type="text" class='txtCal5'  name="" style="background-color: white; font-size: 18px; width: 70px; text-align: center;"/></td>
                    <td><input type="text" class='txtCal6'  name="" style="background-color: white; font-size: 18px; width: 70px; text-align: center;"/></td>
                    <td><input type="text" class='txtCal7'  name="" style="background-color: white; font-size: 18px; width: 70px; text-align: center;"/></td>
                    <td><input type="text" class='txtCal8'  name="" style="background-color: white; font-size: 18px; width: 70px; text-align: center;"/></td>
                    <td><input type="text" class='txtCal9'  name="" style="background-color: white; font-size: 18px; width: 70px; text-align: center;"/></td> 
                    <td><input type="text" class='txtCal10'  name="" style="background-color: white; font-size: 18px; width: 70px; text-align: center;"/></td>
                    <td><input type="text" class='txtCal11'  name="" style="background-color: white; font-size: 18px; width: 70px; text-align: center;"/></td>
                    <td><input type="text" class='txtCal12'  name="" style="background-color: white; font-size: 18px; width: 70px; text-align: center;"/></td>
                    <td><input type="text" class='txtCal13'  name="" style="background-color: white; font-size: 18px; width: 70px; text-align: center;"/></td>
                    <td><input type="text" class='txtCal14'  name="" style="background-color: white; font-size: 18px; width: 70px; text-align: center;"/></td>
                    <td><input type="text" class='txtCal15'  name="" style="background-color: white; font-size: 18px; width: 70px; text-align: center;"/></td>
                    
                </tr> 
                </tbody>                
            <tfoot> 
                <tr>
                    <td></td>
                    <td><span><b>TOTAL  :</b></span></td>        
                    <td><input class='txtCal' /><span id="total_sum_value1" ></span></td>           
                   
                    <td style="text-align:center"><b><span id="total_sum_value2" class='txtCal'></span></b></td>
                    <td style="text-align:center"><b><span id="total_sum_value3" class='txtCal'></span></b></td>
                    <td style="text-align:center"><b><span id="total_sum_value4" class='txtCal'></span></b></td>
                    <td style="text-align:center"><b><span id="total_sum_value5" class='txtCal'></span></b></td>
                    <td style="text-align:center"><b><span id="total_sum_value6" class='txtCal'></span></b></td>
                    <td style="text-align:center"><b><span id="total_sum_value7" class='txtCal'></span></b></td>
                    <td style="text-align:center"><b><span id="total_sum_value8" class='txtCal'></span></b></td>
                    <td style="text-align:center"><b><span id="total_sum_value9" class='txtCal'></span></b></td>
                    <td style="text-align:center"><b><span id="total_sum_value10" class='txtCal'></span></b></td>
                    <td style="text-align:center"><b><span id="total_sum_value11" class='txtCal'></span></b></td>
                    <td style="text-align:center"><b><span id="total_sum_value12" class='txtCal'></span></b></td>
                    <td style="text-align:center"><b><span id="total_sum_value13" class='txtCal'></span></b></td>
                    <td style="text-align:center"><b><span id="total_sum_value14" class='txtCal'></span></b></td>
                    <td style="text-align:center"><b><span id="total_sum_value15" class='txtCal'></span></b></td>
                     
                </tr>  
                <tr>
                <td style="text-align:center"><b><span id="total_sum_value"></span></b></td> 
                </tr>
                <tr>
                    <td><input type="button" value="Add Row" onclick="addRow('dataTable')" /></td>
                    <td><input type="button" value="Delete Row" onclick="deleteRow('dataTable')" /></td> 
                </tr> 
            </tfoot>                  
            </table>
   

     
<div>
<script language="javascript">

$(document).ready(function(){

$("#myTable").on('span','.txtCal', function(){

var calculated_total_sum = 0;

$("#myTable .txtCal").each(function () {
       var get_value = $(this).val();
       if ($.isNumeric(get_value)) {
          calculated_total_sum += parseFloat(get_value);
          }                  
    });

    $("#total_sum_value").html(calculated_total_sum); 

});


	
$("#myTable").on('input', function () {
       var calculated_total_sum1 = 0;
       var calculated_total_sum2 = 0;
       var calculated_total_sum3 = 0;
       var calculated_total_sum4 = 0;
       var calculated_total_sum5 = 0;
       var calculated_total_sum6 = 0;
       var calculated_total_sum7 = 0;
       var calculated_total_sum8 = 0;
       var calculated_total_sum9 = 0;
       var calculated_total_sum10 = 0;
       var calculated_total_sum11 = 0;
       var calculated_total_sum12 = 0;
       var calculated_total_sum13 = 0;
       var calculated_total_sum14 = 0;
       var calculated_total_sum15 = 0;
     
        $("#myTable .txtCal1").each(function () {
           var get_textbox_value = $(this).val();
           if ($.isNumeric(get_textbox_value)) {
              calculated_total_sum1 += parseFloat(get_textbox_value);
              }                  
        });

        $("#myTable .txtCal2").each(function () {
           var get_textbox_value = $(this).val();
           if ($.isNumeric(get_textbox_value)) {
              calculated_total_sum2 += parseFloat(get_textbox_value);
              }                  
        });

        $("#myTable .txtCal3").each(function () {
           var get_textbox_value = $(this).val();
           if ($.isNumeric(get_textbox_value)) {
              calculated_total_sum3 += parseFloat(get_textbox_value);
              }                  
        });
        $("#myTable .txtCal4").each(function () {
           var get_textbox_value = $(this).val();
           if ($.isNumeric(get_textbox_value)) {
              calculated_total_sum4 += parseFloat(get_textbox_value);
              }                  
        });
        $("#myTable .txtCal5").each(function () {
           var get_textbox_value = $(this).val();
           if ($.isNumeric(get_textbox_value)) {
              calculated_total_sum5 += parseFloat(get_textbox_value);
              }                  
        });
        $("#myTable .txtCal6").each(function () {
           var get_textbox_value = $(this).val();
           if ($.isNumeric(get_textbox_value)) {
              calculated_total_sum6 += parseFloat(get_textbox_value);
              }                  
        });
        $("#myTable .txtCal7").each(function () {
           var get_textbox_value = $(this).val();
           if ($.isNumeric(get_textbox_value)) {
              calculated_total_sum7 += parseFloat(get_textbox_value);
              }                  
        });
        $("#myTable .txtCal8").each(function () {
           var get_textbox_value = $(this).val();
           if ($.isNumeric(get_textbox_value)) {
              calculated_total_sum8 += parseFloat(get_textbox_value);
              }                  
        });
        $("#myTable .txtCal9").each(function () {
           var get_textbox_value = $(this).val();
           if ($.isNumeric(get_textbox_value)) {
              calculated_total_sum9 += parseFloat(get_textbox_value);
              }                  
        });
        $("#myTable .txtCal10").each(function () {
           var get_textbox_value = $(this).val();
           if ($.isNumeric(get_textbox_value)) {
              calculated_total_sum10 += parseFloat(get_textbox_value);
              }                  
        });
        $("#myTable .txtCal11").each(function () {
           var get_textbox_value = $(this).val();
           if ($.isNumeric(get_textbox_value)) {
              calculated_total_sum11 += parseFloat(get_textbox_value);
              }                  
        });
        $("#myTable .txtCal12").each(function () {
           var get_textbox_value = $(this).val();
           if ($.isNumeric(get_textbox_value)) {
              calculated_total_sum12 += parseFloat(get_textbox_value);
              }                  
        });
        $("#myTable .txtCal13").each(function () {
           var get_textbox_value = $(this).val();
           if ($.isNumeric(get_textbox_value)) {
              calculated_total_sum13 += parseFloat(get_textbox_value);
              }                  
        });
        $("#myTable .txtCal14").each(function () {
           var get_textbox_value = $(this).val();
           if ($.isNumeric(get_textbox_value)) {
              calculated_total_sum14 += parseFloat(get_textbox_value);
              }                  
        });
        $("#myTable .txtCal15").each(function () {
           var get_textbox_value = $(this).val();
           if ($.isNumeric(get_textbox_value)) {
              calculated_total_sum15 += parseFloat(get_textbox_value);
              }                  
        });

              $("#total_sum_value1").html(calculated_total_sum1);
              $("#total_sum_value2").html(calculated_total_sum2);
              $("#total_sum_value3").html(calculated_total_sum3);
              $("#total_sum_value4").html(calculated_total_sum4);
              $("#total_sum_value5").html(calculated_total_sum5);
              $("#total_sum_value6").html(calculated_total_sum6);
              $("#total_sum_value7").html(calculated_total_sum7);
              $("#total_sum_value8").html(calculated_total_sum8);
              $("#total_sum_value9").html(calculated_total_sum9);
              $("#total_sum_value10").html(calculated_total_sum10);
              $("#total_sum_value11").html(calculated_total_sum11);
              $("#total_sum_value12").html(calculated_total_sum12);
              $("#total_sum_value13").html(calculated_total_sum13);
              $("#total_sum_value14").html(calculated_total_sum14);
              $("#total_sum_value15").html(calculated_total_sum15);             

       });
   
});

    function addRow(tableID) {

        var table = document.getElementById(tableID);

        var rowCount = table.rows.length;
        var row = table.insertRow(rowCount);

        var colCount = table.rows[0].cells.length;

        for(var i=0; i<colCount; i++) {

            var newcell	= row.insertCell(i);

            newcell.innerHTML = table.rows[0].cells[i].innerHTML;
            //alert(newcell.childNodes);
            switch(newcell.childNodes[0].type) {
                case "text":
                        newcell.childNodes[0].value = "";
                        break;
                case "checkbox":
                        newcell.childNodes[0].checked = false;
                        break;
                case "select-one":
                        newcell.childNodes[0].selectedIndex = 0;
                        break;
            }
        }
    }

    function deleteRow(tableID) {
        try {
        var table = document.getElementById(tableID);
        var rowCount = table.rows.length;

        for(var i=0; i<rowCount; i++) {
            var row = table.rows[i];
            var chkbox = row.cells[0].childNodes[0];
            if(null != chkbox && true == chkbox.checked) {
                if(rowCount <= 1) {
                    alert("Cannot delete all the rows.");
                    break;
                }
                table.deleteRow(i);
                rowCount--;
                i--;
            }


        }
        }catch(e) {
            alert(e);
        }
    }

 /*  $('table input').on('input', function() {
        var $tr = $(this).closest('tr'); // get tr which contains the input
        var tot = 0; // variable to store sum
        $('input:not(:last)', $tr).each(function() { // iterate over inputs except last
            tot += Number($(this).val()) || 0; // parse and add value, if NaN then add 0
        });
        $('td:last input', $tr).val(tot); // update input in last column
    }).trigger('input'); // trigger input to set initial value in column 
 */



</script>


@endsection
