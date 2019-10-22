<!DOCTYPE html>
<html lang="en">
@include('partials._head')

<link href="{{asset('css/app.css')}}" rel="stylesheet">
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<body class="nav-md" style="background-color:#fff; padding-left:60px; padding-right:60px;" >


  <!-- page content -->
        <div class="right_col" role="main" >
            <div class="page-title">
                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="data-pjax">
            <p>Start Date: <input type="text" id="datepicker1"></p>
            <p>End Date: <input type="text" id="datepicker2"></p>
<div class="container" style="overflow-x:auto;" >    
    <table class="table table-fluid table-hover table-responsive" id ="myTable">
        <thead>           
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
                    <td><input type="text" class='' id="total_sum_value1" name="" style="background-color: #fff; border:none; margin:0px; text-align: center;"/></td>
                    <td><input type="text" class='' id="total_sum_value2" name="" style="background-color: #fff; border:none; margin:0px; text-align: center;"/></td>
                    <td><input type="text" class='' id="total_sum_value3" name="" style="background-color: #fff; border:none; margin:0px; text-align: center;"/></td>
                    <td><input type="text" class='' id="total_sum_value4" name="" style="background-color: #fff; border:none; margin:0px; text-align: center;"/></td>
                    <td><input type="text" class='' id="total_sum_value5" name="" style="background-color: #fff; border:none; margin:0px; text-align: center;"/></td>
                    <td><input type="text" class='' id="total_sum_value6" name="" style="background-color: #fff; border:none; margin:0px; text-align: center;"/></td>
                    <td><input type="text" class='' id="total_sum_value7" name="" style="background-color: #fff; border:none; margin:0px; text-align: center;"/></td>
                    <td><input type="text" class='' id="total_sum_value8" name="" style="background-color: #fff; border:none; margin:0px; text-align: center;"/></td>
                    <td><input type="text" class='' id="total_sum_value9" name="" style="background-color: #fff; border:none; margin:0px; text-align: center;"/></td>
                    <td><input type="text" class='' id="total_sum_value10" name="" style="background-color: #fff; border:none; margin:0px; text-align: center;"/></td>
                    <td><input type="text" class='' id="total_sum_value11" name="" style="background-color: #fff; border:none; margin:0px; text-align: center;"/></td>
                    <td><input type="text" class='' id="total_sum_value12" name="" style="background-color: #fff; border:none; margin:0px; text-align: center;"/></td>
                    <td><input type="text" class='' id="total_sum_value13" name="" style="background-color: #fff; border:none; margin:0px; text-align: center;"/></td>
                    <td><input type="text" class='' id="total_sum_value14" name="" style="background-color: #fff; border:none; margin:0px; text-align: center;"/></td>
                    <td><input type="text" class='' id="total_sum_value15" name="" style="background-color: #fff; border:none; margin:0px; text-align: center;"/></td>  
                    <td><span id="total_sum_value16"></span></td>                                                                              
                </tr>  
                
                <tr>
                    <td><input type="button" value="Add Row" onclick="addRow('dataTable')" /></td>
                    <td><input type="button" value="Delete Row" onclick="deleteRow('dataTable')" /></td> 
                </tr> 
                <tr>

                    <div id="array1"></div>
                   

                </tr> 
            </tfoot>                  
            </table>
   
        </div>

            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
    @include('partials._footer')
    <!-- /footer content -->




@include('partials._notification')
@stack('scripts')

<script language="javascript">

var date1 = new Date();
var date2 = new Date();
var array = [];
    
var getDateArray = function(start, end) {
    var arr = new Array();
    var dt = new Date(start);
    while (dt <= end) {
        arr.push(new Date(dt));
        dt.setDate(dt.getDate() + 1);
    }    
    return arr;  
     
}

var getDateRange = function(dateArr){
    var header = [];
    var table = document.getElementById("myTable").getElementsByTagName("thead")[0];
    var newTr = table.insertRow(-1);
    for (i=-2;i<dateArr.length;i++){  
        dateArr[-1]="";
        dateArr[-2]="";
      newTr.insertCell(-1).appendChild(document.createTextNode(dateArr[i]));
     
    }
}

$(document).ready(function(){   
    $( "#datepicker1" ).datepicker({         
        onClose: function() {    
            var startdate = $('#datepicker1').datepicker('getDate');
            var enddate = $('#datepicker1').datepicker('getDate');
            enddate.setDate(enddate.getDate()+14)
            $( "#datepicker2" ).datepicker("setDate", enddate);             
            var dateArr = getDateArray(startdate, enddate);   
            getDateRange(dateArr);       
        }       
    });   
    $( "#datepicker2" ).datepicker();    
});



 $(document).ready(function(){  
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

       var calculated_total_sum16 = 0;
          

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

        
              $('#total_sum_value1').val(calculated_total_sum1);            
              $("#total_sum_value2").val(calculated_total_sum2);
              $("#total_sum_value3").val(calculated_total_sum3);
              $("#total_sum_value4").val(calculated_total_sum4);
              $("#total_sum_value5").val(calculated_total_sum5);
              $("#total_sum_value6").val(calculated_total_sum6);
              $("#total_sum_value7").val(calculated_total_sum7);
              $("#total_sum_value8").val(calculated_total_sum8);
              $("#total_sum_value9").val(calculated_total_sum9);
              $("#total_sum_value10").val(calculated_total_sum10);
              $("#total_sum_value11").val(calculated_total_sum11);
              $("#total_sum_value12").val(calculated_total_sum12);
              $("#total_sum_value13").val(calculated_total_sum13);
              $("#total_sum_value14").val(calculated_total_sum14);
              $("#total_sum_value15").val(calculated_total_sum15); 
              
              calculated_total_sum16 = calculated_total_sum1 + calculated_total_sum2 + calculated_total_sum3 + calculated_total_sum4 + calculated_total_sum5 + calculated_total_sum6 + calculated_total_sum7 +calculated_total_sum8 + calculated_total_sum9 + calculated_total_sum10 + calculated_total_sum11 + calculated_total_sum12 + calculated_total_sum13 + calculated_total_sum14 + calculated_total_sum15;
              $("#total_sum_value16").html(calculated_total_sum16);
       
              
              
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


</script>

</body>
</html>