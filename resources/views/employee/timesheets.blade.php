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
                    
                </div>
            </div>
            <div class="clearfix"></div>
                <div class="data-pjax">
                    <div style="padding-bottom:20px;">                       
                        <a href="{{route('employee.dashboard')}}" style="color:#0000cc;">Dashboard > </a>
                        <a href="{{url('/alltimesheets',auth()->user()->id)}}" style="color:#0000cc;">All Timesheets</a>
                    </div>
                <form method="post" action="{{url('create/timesheet',auth()->user()->id)}}" enctype="multipart/form-data">
                {{csrf_field()}}
                    <p>Start Date: <input type="text" id="datepicker1" name="from-date"></p>
                    <p>End Date: <input type="text" id="datepicker2" name="to-date"></p>            
                        
                    <div class="container" style="overflow-x:auto;" >    
                        <table class="table table-fluid table-hover table-responsive" id ="myTable">
                            <thead>           
                            </thead> 
                            <tbody id="dataTable">                
                                    <tr>                                                   
                                        <td><select name = "project-id" style="background-color: white; font-size: 15px; width: 200px; height:32px; text-align: center;" >
                                        <option value="">Select Project</option>
                                                @foreach($projects as $project)
                                                    <option value="{{$project->id}}">{{$project->project_name}}</option>
                                                @endforeach
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
                                        <td><input type="text" class='' id="worked_hours" name="worked-hours" style="background-color: #fff; border:none; margin:0px; text-align: center;"/></td>
                                    <!-- <td><span id="worked_hours"><input type="hidden" id="worked_hours_db" name="worked-hours"></span></td> -->
                                    </tr>
                                    <tr>
                                        
                                        <td><input type="text" value=" Leave" name = "value" style="background-color: white; font-size: 15px; width: 200px; height:32px;border:1px solid #ddd;" disabled></td>
                                        <td><input type="text" class='txtCal16'  name="" style="background-color: white; font-size: 18px; width: 70px; text-align: center;"/></td>
                                        <td><input type="text" class='txtCal17'  name="" style="background-color: white; font-size: 18px; width: 70px; text-align: center;"/></td>
                                        <td><input type="text" class='txtCal18' name="" style="background-color: white; font-size: 18px; width: 70px; text-align: center;"/></td>
                                        <td><input type="text" class='txtCal19'  name="" style="background-color: white; font-size: 18px; width: 70px; text-align: center;"/></td>
                                        <td><input type="text" class='txtCal20'  name="" style="background-color: white; font-size: 18px; width: 70px; text-align: center;"/></td>
                                        <td><input type="text" class='txtCal21'  name="" style="background-color: white; font-size: 18px; width: 70px; text-align: center;"/></td>
                                        <td><input type="text" class='txtCal22'  name="" style="background-color: white; font-size: 18px; width: 70px; text-align: center;"/></td>
                                        <td><input type="text" class='txtCal23'  name="" style="background-color: white; font-size: 18px; width: 70px; text-align: center;"/></td>
                                        <td><input type="text" class='txtCal24'  name="" style="background-color: white; font-size: 18px; width: 70px; text-align: center;"/></td> 
                                        <td><input type="text" class='txtCal25'  name="" style="background-color: white; font-size: 18px; width: 70px; text-align: center;"/></td>
                                        <td><input type="text" class='txtCal26'  name="" style="background-color: white; font-size: 18px; width: 70px; text-align: center;"/></td>
                                        <td><input type="text" class='txtCal27'  name="" style="background-color: white; font-size: 18px; width: 70px; text-align: center;"/></td>
                                        <td><input type="text" class='txtCal28'  name="" style="background-color: white; font-size: 18px; width: 70px; text-align: center;"/></td>
                                        <td><input type="text" class='txtCal29'  name="" style="background-color: white; font-size: 18px; width: 70px; text-align: center;"/></td>
                                        <td><input type="text" class='txtCal30'  name="" style="background-color: white; font-size: 18px; width: 70px; text-align: center;"/></td>
                                        <td><input type="text" class='' id="leave_hours" name="leave-hours" style="background-color: #fff; border:none; margin:0px; text-align: center;"/></td>
                                        
                                    </tr> 
                                    <tr>
                                    <td><input type="text" value=" Holiday" name = "value" style="background-color: white; font-size: 15px; width: 200px; height:32px;border:1px solid #ddd;" disabled ></td>
                                        <td><input type="text" class='txtCal31'  name="" style="background-color: white; font-size: 18px; width: 70px; text-align: center;"/></td>
                                        <td><input type="text" class='txtCal32'  name="" style="background-color: white; font-size: 18px; width: 70px; text-align: center;"/></td>
                                        <td><input type="text" class='txtCal33' name="" style="background-color: white; font-size: 18px; width: 70px; text-align: center;"/></td>
                                        <td><input type="text" class='txtCal34'  name="" style="background-color: white; font-size: 18px; width: 70px; text-align: center;"/></td>
                                        <td><input type="text" class='txtCal35'  name="" style="background-color: white; font-size: 18px; width: 70px; text-align: center;"/></td>
                                        <td><input type="text" class='txtCal36'  name="" style="background-color: white; font-size: 18px; width: 70px; text-align: center;"/></td>
                                        <td><input type="text" class='txtCal37'  name="" style="background-color: white; font-size: 18px; width: 70px; text-align: center;"/></td>
                                        <td><input type="text" class='txtCal38'  name="" style="background-color: white; font-size: 18px; width: 70px; text-align: center;"/></td>
                                        <td><input type="text" class='txtCal39'  name="" style="background-color: white; font-size: 18px; width: 70px; text-align: center;"/></td> 
                                        <td><input type="text" class='txtCal40'  name="" style="background-color: white; font-size: 18px; width: 70px; text-align: center;"/></td>
                                        <td><input type="text" class='txtCal41'  name="" style="background-color: white; font-size: 18px; width: 70px; text-align: center;"/></td>
                                        <td><input type="text" class='txtCal42'  name="" style="background-color: white; font-size: 18px; width: 70px; text-align: center;"/></td>
                                        <td><input type="text" class='txtCal43'  name="" style="background-color: white; font-size: 18px; width: 70px; text-align: center;"/></td>
                                        <td><input type="text" class='txtCal44'  name="" style="background-color: white; font-size: 18px; width: 70px; text-align: center;"/></td>
                                        <td><input type="text" class='txtCal45'  name="" style="background-color: white; font-size: 18px; width: 70px; text-align: center;"/></td>
                                        <td><input type="text" class='' id="holiday_hours" name="holiday-hours" style="background-color: #fff; border:none; margin:0px; text-align: center;"/></td>
                                    </tr> 
                                    </tbody>                
                                <tfoot> 
                                    <tr>                           
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
                                        <td><span id="total_sum_value16"><input type="hidden" id="total_sum_value16" name="total-sum"></span></td>                                                                              
                                    </tr>            
                                </tfoot>                  
                            </table>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
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
    console.log(dt); 
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
    
    for (var i=-1;i<dateArr.length;i++){              
        dateArr[-1]="";
        dateArr[-2]="";         
      newTr.insertCell(-1).appendChild(document.createTextNode(dateArr[i]));
       
    }
}



$(document).ready(function(){   
    var daterange= [];
    $( "#datepicker1" ).datepicker({         
        dateFormat: 'yy-mm-dd',
        onClose: function() {    
                     
            // startdate = new date();            
            
            var  startdate =  $('#datepicker1').datepicker('getDate'); 
               
            var enddate = $('#datepicker1').datepicker('getDate');
            
            enddate.setDate(enddate.getDate()+14)
            $( "#datepicker2" ).datepicker("setDate", enddate); 
                         
            var dateArr = getDateArray(startdate, enddate);             
            daterange = getDateRange(dateArr);            
        }   
          
    });   
     
    $( "#datepicker2" ).datepicker();    
    $( "#datepicker2" ).datepicker( "option", "dateFormat", 'yy-mm-dd' );   
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

       var worked_hours = 0;
       var leave_hours = 0;
       var holiday_hours = 0;
          

        $("#myTable .txtCal1, #myTable .txtCal16, #myTable .txtCal31").each(function () {
           var get_textbox_value = $(this).val();
           if ($.isNumeric(get_textbox_value)) {
              calculated_total_sum1 += parseFloat(get_textbox_value);
              }                  
        });

        $("#myTable .txtCal2, #myTable .txtCal17, #myTable .txtCal32").each(function () {
           var get_textbox_value = $(this).val();
           if ($.isNumeric(get_textbox_value)) {
              calculated_total_sum2 += parseFloat(get_textbox_value);
              }                  
        });

        $("#myTable .txtCal3, #myTable .txtCal18, #myTable .txtCal33").each(function () {
           var get_textbox_value = $(this).val();
           if ($.isNumeric(get_textbox_value)) {
              calculated_total_sum3 += parseFloat(get_textbox_value);
              }                  
        });
        $("#myTable .txtCal4, #myTable .txtCal19, #myTable .txtCal34").each(function () {
           var get_textbox_value = $(this).val();
           if ($.isNumeric(get_textbox_value)) {
              calculated_total_sum4 += parseFloat(get_textbox_value);
              }                  
        });
        $("#myTable .txtCal5, #myTable .txtCal20, #myTable .txtCal35").each(function () {
           var get_textbox_value = $(this).val();
           if ($.isNumeric(get_textbox_value)) {
              calculated_total_sum5 += parseFloat(get_textbox_value);
              }                  
        });
        $("#myTable .txtCal6, #myTable .txtCal21, #myTable .txtCal36").each(function () {
           var get_textbox_value = $(this).val();
           if ($.isNumeric(get_textbox_value)) {
              calculated_total_sum6 += parseFloat(get_textbox_value);
              }                  
        });
        $("#myTable .txtCal7, #myTable .txtCal22, #myTable .txtCal37").each(function () {
           var get_textbox_value = $(this).val();
           if ($.isNumeric(get_textbox_value)) {
              calculated_total_sum7 += parseFloat(get_textbox_value);
              }                  
        });
        $("#myTable .txtCal8, #myTable .txtCal23, #myTable .txtCal38").each(function () {
           var get_textbox_value = $(this).val();
           if ($.isNumeric(get_textbox_value)) {
              calculated_total_sum8 += parseFloat(get_textbox_value);
              }                  
        });
        $("#myTable .txtCal9, #myTable .txtCal24, #myTable .txtCal39").each(function () {
           var get_textbox_value = $(this).val();
           if ($.isNumeric(get_textbox_value)) {
              calculated_total_sum9 += parseFloat(get_textbox_value);
              }                  
        });
        $("#myTable .txtCal10, #myTable .txtCal25, #myTable .txtCal40").each(function () {
           var get_textbox_value = $(this).val();
           if ($.isNumeric(get_textbox_value)) {
              calculated_total_sum10 += parseFloat(get_textbox_value);
              }                  
        });
        $("#myTable .txtCal11, #myTable .txtCal26, #myTable .txtCal41").each(function () {
           var get_textbox_value = $(this).val();
           if ($.isNumeric(get_textbox_value)) {
              calculated_total_sum11 += parseFloat(get_textbox_value);
              }                  
        });
        $("#myTable .txtCal12, #myTable .txtCal27, #myTable .txtCal42").each(function () {
           var get_textbox_value = $(this).val();
           if ($.isNumeric(get_textbox_value)) {
              calculated_total_sum12 += parseFloat(get_textbox_value);
              }                  
        });
        $("#myTable .txtCal13, #myTable .txtCal28, #myTable .txtCal43").each(function () {
           var get_textbox_value = $(this).val();
           if ($.isNumeric(get_textbox_value)) {
              calculated_total_sum13 += parseFloat(get_textbox_value);
              }                  
        });
        $("#myTable .txtCal14, #myTable .txtCal29, #myTable .txtCal44").each(function () {
           var get_textbox_value = $(this).val();
           if ($.isNumeric(get_textbox_value)) {
              calculated_total_sum14 += parseFloat(get_textbox_value);
              }                  
        });
        $("#myTable .txtCal15, #myTable .txtCal30, #myTable .txtCal45").each(function () {
           var get_textbox_value = $(this).val();
           if ($.isNumeric(get_textbox_value)) {
              calculated_total_sum15 += parseFloat(get_textbox_value);
              }                  
        });

        $("#myTable .txtCal1, #myTable .txtCal2, #myTable .txtCal3, #myTable .txtCal4,#myTable .txtCal5, #myTable .txtCal6, #myTable .txtCal7, #myTable .txtCal8, #myTable .txtCal9, #myTable .txtCal10, #myTable .txtCal11, #myTable .txtCal12, #myTable .txtCal13, #myTable .txtCal14, #myTable .txtCal15").each(function () {
           var get_textbox_value = $(this).val();
           if ($.isNumeric(get_textbox_value)) {
                worked_hours += parseFloat(get_textbox_value);
              }                  
        });

        $("#myTable .txtCal16, #myTable .txtCal17, #myTable .txtCal18, #myTable .txtCal19, #myTable .txtCal20, #myTable .txtCal21, #myTable .txtCal22, #myTable .txtCal23, #myTable .txtCal24, #myTable .txtCal25, #myTable .txtCal26, #myTable .txtCal27, #myTable .txtCal28, #myTable .txtCal29, #myTable .txtCal30").each(function () {
           var get_textbox_value = $(this).val();
           if ($.isNumeric(get_textbox_value)) {
                leave_hours += parseFloat(get_textbox_value);
              }                  
        });

        $("#myTable .txtCal31, #myTable .txtCal32, #myTable .txtCal33, #myTable .txtCal34,#myTable .txtCal35, #myTable .txtCal36, #myTable .txtCal37, #myTable .txtCal38, #myTable .txtCal39, #myTable .txtCal40, #myTable .txtCal41, #myTable .txtCal42, #myTable .txtCal43, #myTable .txtCal44, #myTable .txtCal45").each(function () {
           var get_textbox_value = $(this).val();
           if ($.isNumeric(get_textbox_value)) {
                holiday_hours += parseFloat(get_textbox_value);
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

              $("#worked_hours").val(worked_hours); 
              $("#leave_hours").val(leave_hours); 
              $("#holiday_hours").val(holiday_hours);

              //$("#worked_hours1").val(worked_hours); 
              //$("#leave_hours1").val(leave_hours); 
              //$("#holiday_hours1").val(holiday_hours); 
              
              
              document.getElementById("worked_hours_db").value = worked_hours;

              calculated_total_sum16 = calculated_total_sum1 + calculated_total_sum2 + calculated_total_sum3 + calculated_total_sum4 + calculated_total_sum5 + calculated_total_sum6 + calculated_total_sum7 +calculated_total_sum8 + calculated_total_sum9 + calculated_total_sum10 + calculated_total_sum11 + calculated_total_sum12 + calculated_total_sum13 + calculated_total_sum14 + calculated_total_sum15;
              $("#total_sum_value16").html(calculated_total_sum16);
       
              
              
       });
       
   
});
 
    

    


</script>

</body>
</html>