<?php
?>
<div class="container"><!-- wrapper -->
<div class="row-fluid" >
<div class="thumbnail">
<br>
<br>
    <div class="alert alert-error" id="div-overlay-alert-msg"></div><!-- end div-overlay-alert-msg -->
    <div id="div-alert-success" class="alert alert-success"></div>
    <div id='div-search' class="form-search" style="margin-left: 120px;">
        <input type='text' name='searchStudId' id='searchStudId' placeholder="ENTER STUDENT ID HERE" required>
        <button id='btn-search-stud' class='btn btn-medium' >Search</button>
    </div>
    <br>

    <div class="container">
        <div class="row">
            <div class="span4" style="border: 0 none; padding-top: 40px;"> <!-- student profile_pic -->
                <div id='div-for-pic'>
                    <div class="div-image"></div><!-- end div-image -->
                    <span id = "label_change_pic">&nbsp;&nbsp;<i class="icon-pencil"></i>&nbsp;&nbsp;Change Picture</span>
                </div><!-- end div-for-pic -->
            </div>
            <!-- END student profile_pic -->

            <div class="span8 form-horizontal" style="border: 0 none;"> <!-- student name -->
                <h3>Personal Information</h3>
                <div class="control-group">
                    <label class="control-label">STUDENT ID NO</label>
                    <div class="controls">
                        <span class='label label-info' id='studentId'></span>
                        <input type='hidden' id='currentGYL' />
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">FULL NAME</label>
                    <div class="controls">
                        <span class='label label-info' id='studentName'></span>
                    </div>
                </div>
            </div>
    <!-- END student name -->
        </div>


        <div class="row">
            <div class="span6" style="border: 0 none;"> <!-- left department -->
                <h3 style="padding-left:40px;">Department</h3>
                <form style="padding-left:40px;">
                    <label class="radio inline">
                        <input type="radio" name="radioDepartment" id="radioElemDept" value="Elementary Dept." >
                        ELEMENTARY DEPT.
                    </label>
                    <label class="radio inline">
                        <input type="radio" name="radioDepartment" id="radioHighSchDept" value="High School Dept." >
                        HIGH SCHOOL DEPT.
                    </label>
                </form>
                <div class="form-horizontal">
                    <div class="control-group">
                        <label class="control-label">AGE</label>
                        <div class="controls">
                            <input type='text' name='age' id='age'/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">S.Y. ENTERED</label>
                        <div class="controls">
                            <select id='syEntered'>
                                <?php
                                    $n = 2050;
                                    for($i=2013;$i<$n;$i++){
                                        $p = $i+1;
                                        echo '<option value='.$i.'-'.$p.'>'.$i.'-'.$p.'</option>';
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">GRADE</label>
                        <div class="controls">
                            <select id='grade'>
                                <option value='Grade 1'>I</option>
                                <option value='Grade 2'>II</option>
                                <option value='Grade 3'>III</option>
                                <option value='Grade 4'>IV</option>
                                <option value='Grade 5'>V</option>
                                <option value='Grade 6'>VI</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">YEAR LVL.</label>
                        <div class="controls">
                            <select id='yrLevel'>
                                <option value='First Year'>FIRST YEAR</option>
                                <option value='Second Year'>SECOND YEAR</option>
                                <option value='Third Year'>THIRD YEAR</option>
                                <option value='Fourth Year'>FOURTH YEAR</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">GEN. AVE. GRADE</label>
                        <div class="controls">
                            <input type='text' name='genAverage' id='genAverage' />
                        </div>
                    </div>

                </div>
            </div>
            <!-- END left, department -->

            <div class="span6" style="border: 0 none;"><!-- right, enrollment_no, transaction_no -->
                <br>
                <br>
                <br>
                <div class="control-date">
                    <span id='span-date' title='(Month/Date/Year)' class="label label-info"></span>&nbsp;
                    <span id="span-time" class="label label-info"></span>
                </div>
                <br/>
                <div class="form-horizontal">
                    <div class="control-group">
                         <label class="control-label">ENROLLMENT NO</label>
                        <div class="controls">
                            <input type='text' name='enrollmntId' id='enrollmntId' readonly="readonly"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">TRANSACTION NO</label>
                        <div class="controls">
                            <input type='text' name='transactionNo' id='transactionNo' readonly="readonly"/>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">RECENT BALANCE</label>
                        <div class="controls">
                            <input type='text' name='recentBal' id='recentBal' readonly="readonly"/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="span6 btn-sub-fees">
                <button id='btn-sub-fees' class='btn btn-large btn-primary'>SUBJECT | FEES</button>
            </div>
            <!-- END right, enrollment_no, transaction_no -->
        </div>
        <!-- END row for right, -->
        <div class="row"> <!-- row, mode of payment, category -->
            <div class='span6' style="padding-left:40px;"> <!-- mode of payment -->
                <h3>Mode of payment</h3>
                <form id='form-radio-mode'>
                    <label class="radio inline">
                        <input type='radio' name='radioPaymnt' id='radioFullPaymnt' value="Full"/>
                        FULL
                    </label>
                    <label class="radio inline">
                        <input type='radio' name='radioPaymnt' id='radioMonthlyPaymnt' value="Monthly"/>
                        MONTHLY
                    </label>
                    <label class="radio inline">
                        <input type='radio' name='radioPaymnt' id='radioSemestralPaymnt' value="Semestral"/>
                        SEMESTRAL
                    </label>
                </form>
            </div>

            <div class='span6' style="padding-left:40px;"> <!-- category -->
                <h3>Category</h3>
                <dd><span class="label label-info" id='category' ></span></dd>
            </div>
        </div>
        <!-- END row, mode of payment, category -->

        <div class="row"> <!-- row, table fees and subjects -->
            <div id='div-for-full'>
                <div id='div-for-table-full-pymnt'>
                    <h5>FEES - FULL PAYMENT</h5>
                    <table id='tbl-for-full' class='table table-striped table-bordered'>
                        <thead>

                        <tr>
                            <th>CODE</th>
                            <th>DESCRIPTION</th>
                            <th>AMOUNT</th>
                        </tr>
                        </thead>
                        <tbody id='tbody-for-full' class='tbody-for-fee-sub'>
                            <tr>
                                <td>23232323</td>
                                <td>sdsddddddddd</td>
                                <td>11111111111</td>
                            </tr>
                            <tr>
                                <td>23232323</td>
                                <td>sdsddddddddd</td>
                                <td>11111111111</td>
                            </tr>
                        </tbody>
                    </table><!-- end tbl-for-full -->
                    <div id='div-alert-msg-F' class="alert alert-error"></div><!-- end div-alert-msg-F -->
                </div><!-- end div-for-table-full-pymnt -->
                <div id='div-foot-full' class='div-foot-full-partial'>
                    <div class="span6" style="padding-left: 50px; border: 0 none;">
                        <label>TOTAL AMOUNT:</label>
                        <input type="text" name='totalAmountFull' id='totalAmountFull' readonly='readonly'>
                        <label>TOTAL CURR. PAYMNT.:</label>
                        <input type="text" name='cPaymentFull' id='cPaymentFull' readonly='readonly'/>
                    </div>

                    <div class="span6" style="padding-left: 50px; border: 0 none;">
                        <label class='labelF'>ENTER CASH HERE!</label><p>
                         <input type='text' name='cashAmountF' id='cashAmountF' placeholder='0.00'/><p>
                         <label class='labelF'>YOUR CHANGE!</label>
                         <input type='text' name='cashChangeF' id='cashChangeF' placeholder='0.00' readonly='readonly'/><p>
                    </div>
                    <div style="margin-left: 505px;">
                        <button id='btn-fee-full-back' class='btn'>Back</button>
                        <button id='btn-fee-full-next' class='btn btn-primary'>Next</button>
                    </div><!-- end div-btn-back-next-F -->
                </div><!-- end div-foot-full -->
                <br/>
            </div><!-- end div-for-full -->

            <div id='div-for-MS'>
                <div id='div-for-table-MS-pymnt'>
                    <h5>FEES - M-S PAYMENT</h5>
                    <table id='tbl-for-MS' class='table table-striped table-bordered'>
                        <thead>
                        <tr>
                            <th>CODE</th>
                            <th>DESCRIPTION</th>
                            <th>AMOUNT</th>
                            <th>BALANCE</th>
                            <th>CURR. PAYMENT</th>
                        </tr>
                        </thead>
                        <tbody id='tbody-for-fees-MS' class='tbody-for-fee-sub'>

                        </tbody>
                    </table>
                    <br/>
                    <div id='div-alert-msg-MS' class="alert alert-error"></div><!-- end div-alert-msg -->
                    <!--button class='btn btn-medium btn-primary' id='tempDelete' title='This is just a temporary button to delete current transaction'>Delete</button-->
                </div><!-- end div-for-table-monthly-pymnt -->

                <div id='div-bottom-monthly-pymnt'>

                    <div id='div-foot-MS' class='div-foot-full-monthly'>
                        <div class="span6" style="padding-left: 50px; border: 0 none;">
                            <label class='lbl-foot-full-MS'>TOTAL AMOUNT:</label>
                            <input type="text" name='totalAmountMS' id='totalAmountMS' readonly='readonly'/>
                            <label class='lbl-foot-full-MS'>CURR. PAYMNT.:</label>
                            <input type="text" name='cPaymentMS' id='cPaymentMS' readonly='readonly'/>
                        </div>

                        <div class="span6" style="padding-left: 50px; border: 0 none;">
                            <label class='labelF'>ENTER CASH HERE!</label><p>
                            <input type='text' name='cashAmount' id='cashAmount' placeholder='0.00'/><p>
                            <label class='labelF'>YOUR CHANGE!</label>
                            <input type='text' name='cashChange' id='cashChange' placeholder='0.00' readonly='readonly'/><p>
                        </div>

                        <div id='div-btn-back-next-MS' style="margin-left: 500px;">
                            <button id='btn-fee-MS-back' class='btn btn-default'>Back</button>
                            <button id='btn-fee-MS-next' class='btn btn-primary'>Next..</button>
                        </div>
                    </div><!-- end div-foot-MS -->
                </div><!-- end div-bottom-monthly-pymnt -->
            </div><!-- end div-for-monthly -->

            <div id='div-for-subject'>
                <div id='div-for-table-subject'>
                    <h5>SUBJECTS</h5>
                    <table id='tbl-for-subject' class='table table-bordered table-striped'>
                        <thead>
                        <tr>
                            <th>CODE</th>
                            <th>NAME</th>
                            <th>UNITS</th>
                        </tr>
                        </thead>
                        <tbody id='tbody-for-tbl-for-subject' class='tbody-for-fee-sub'>

                        </tbody>
                    </table>
                </div><!-- end div-for-table-subject -->
                <br/>
                <div id='div-foot-subject' style="margin-left: 500px;">
                    <div id='div-btn-back-next-sub'>
                        <button id='btn-sub-back' class='btn '>Back</button>
                        <button id='btn-sub-next' class='btn btn-primary'>Next</button>
                    </div>
                </div>
            </div><!-- end div-for-subject -->

        </div>
        <!-- end row,table fees and subjects -->
        <br>
        <div class="row">
            <div id="div-btn-done-cancel">
                <button id='btn-done-assmnt' class='btn btn-small btn-primary'>DONE</button>
                <button id='btn-cancel-assmnt' class='btn btn-small btn-default'>CANCEL</button>
                <button id='btn-reset-all-assmnt' class='btn btn-small btn-warning'>RESET?</button>
            </div><!-- end div-btn-done-cancel -->
        </div>

    </div>
    <!-- END container -->
<br><br>
</div>
<!-- END thumbnail -->
</div>
<!-- END row-fluid -->
</div>
<!-- END wrapper -->

<div id="dialog-confirm" title="Proceed....">
    <p><span class="ui-icon ui-icon-alert" style="float: left; margin: 0 7px 20px 0;"></span>Proceed to subjects..<br/>Are you sure?</p>
</div><!-- end dialog-confirm -->
<div id="dialog-cancel-ass" title='Cancel this transaction..'>
    <p><span class="ui-icon ui-icon-alert" style="float: left; margin: 0 7px 20px 0;"></span>All saved data in this transaction will permanently deleted. Continue anyway?</p>
</div><!-- end dialog-cancel-ass -->
<div id='dialog-confirm-done-MS-assessment' title='DONE ASSESSMENT'>
    <span class="ui-icon ui-icon-alert" style="float: left; margin: 0 7px 20px 0;"></span><span class='labelData'>NOTE:CHECK DATA BEFORE PROCEED!</span>
    <br><br/>
    <span class='labelData'>STUDENT NO.:</span>&nbsp;&nbsp;<small id='small-studNum'></small>
    <br>
    <span class='labelData'>NAME:</span>&nbsp;&nbsp;<small id='small-name'></small>
    <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='labelData'>DEPARTMENT:</span>&nbsp;&nbsp;<small id='small-department'></small>
    <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='labelData'>AGE:</span>&nbsp;&nbsp;<small id='small-age'></small>
    <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='labelData'>SCHOOL YEAR:</span>&nbsp;&nbsp;<small id='small-schYear'></small>
    <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id='for-grade' class='labelData'>GRADE:</span>&nbsp;&nbsp;<small id='small-grade'></small>
    <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id='for-yearLevel'class='labelData'>YEAR LEVEL:</span>&nbsp;&nbsp;<small id='small-yrLevel'></small>
    <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='labelData'>GENERAL AVERAGE:</span>&nbsp;&nbsp;<small id='small-generalAve'></small>
    <br><br/>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class='labelData'>Do you want to proceed?</span>
</div>
</div><!-- end div-assessment-wrapper -->
<div class='div-overlay-upload-wrapp'>
    <div class="div-overlay-upload">
        <div id='photo_upload_status' align='center'>

        </div>
        <div id='close_upload'>
            <i class='icon-remove'></i>
        </div>
        <center>
            <div style="width: 350px; margin-left: 20px;" align="center">
                <form id="form_upload_pic" method="post" enctype="multipart/form-data" action="javascript:void(0);" autocomplete="off">
                    <div class='browse_label' align="left">Browse Photo</div>
                    <div class='attach_file_wrapp' align="left">
                        <div class='attach_file'><input type='file' name='photo_upload' id='photo_upload'/></div><br>
                        <!--div><button class="btn btn-primary">Upload</button></div-->
                        <input type='hidden' name='h_student_id' id='h_student_id' " />
                    </div><br clear="all">
                </form>
            </div>
        </center>
    </div><!-- end div-overlay-upload -->
</div><!-- end div-overlay-upload-wrapp-->