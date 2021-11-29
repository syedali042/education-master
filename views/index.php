<div class="container">
    <div class="sb2-3" style="margin-top: 80px;">
        <!--== breadcrumbs ==-->
       <!--  <div class="sb2-2-2">
            <ul>
                <li><a href="index.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                </li>
                <li class="active-bre"><a href="#"> Dashboard</a>
                </li>
                <li class="page-back"><a href="index.html"><i class="fa fa-backward" aria-hidden="true"></i> Back</a>
                </li>
            </ul>
        </div> -->
        <!--== DASHBOARD INFO ==-->
        <label style="font-size: 20px;font-weight: bold;padding: 10px;">Dashboard</label>
        <div class="row">
            <div class="col-lg-3 col-6 col-sm-6 col-xs-6">
              <div class="circle-tile ">
                <a href="dashboard?display=subjects"><div class="circle-tile-heading dark-blue"><i class="fa fa-book fa-fw fa-3x"></i></div></a>
                <div class="circle-tile-content dark-blue">
                  <div class="circle-tile-description text-faded"> Subjects</div>
                  <div class="circle-tile-number text-faded "><?=count($studentSubjects)?></div>
                  <a class="circle-tile-footer" href="dashboard?display=subjects">More Info<i class="fa fa-chevron-circle-right"></i></a>
                </div>
              </div>
            </div>
            </a>
             
            <div class="col-lg-3 col-6 col-sm-6 col-xs-6">
              <div class="circle-tile ">
                <a href="dashboard?display=lectures"><div class="circle-tile-heading red"><i class="fa fa-users fa-fw fa-3x"></i></div></a>
                <div class="circle-tile-content red">
                  <div class="circle-tile-description text-faded"> Lectures</div>
                  <div class="circle-tile-number text-faded"><?=count($studentLectures)?></div>
                  <a class="circle-tile-footer" href="dashboard?display=lectures">More Info<i class="fa fa-chevron-circle-right"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-6 col-sm-6 col-xs-6">
              <div class="circle-tile ">
                <a href="dashboard?display=exams"><div class="circle-tile-heading blue"><i class="fa fa-users fa-fw fa-3x"></i></div></a>
                <div class="circle-tile-content blue">
                  <div class="circle-tile-description text-faded"> Exams</div>
                  <div class="circle-tile-number text-faded "><?=count($studentExams)?></div>
                  <a class="circle-tile-footer" href="dashboard?display=exams">More Info<i class="fa fa-chevron-circle-right"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-6 col-sm-6 col-xs-6">
              <div class="circle-tile ">
                <a href="dashboard?display=results"><div class="circle-tile-heading green"><i class="fa fa-users fa-fw fa-3x"></i></div></a>
                <div class="circle-tile-content green">
                  <div class="circle-tile-description text-faded"> Results</div>
                  <div class="circle-tile-number text-faded ">&nbsp;</div>
                  <a class="circle-tile-footer" href="dashboard?display=results">More Info<i class="fa fa-chevron-circle-right"></i></a>
                </div>
              </div>
            </div> 
          </div> 
        <!--== User Details ==-->
        <div class="sb2-2-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-inn-sp">
                        <div class="inn-title">
                            <h4>Classmates</h4>
                            <!-- <p>All about students like name, student id, phone, email, country, city and more</p> -->
                        </div>
                        <div class="tab-inn">
                            <div class="table-responsive table-desi">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($studentClassmates as $key => $row): ?>
                                        <tr>
                                            <td><span class="list-img"><img src="<?=AD_IMG?>students/<?=$row['student_img']?>" alt=""></span>
                                            </td>
                                            <td style="width: 90%;">
                                                <p style="margin-top: 12px;"><?=$row['student_name']?></p>
                                            </td>
                                        </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
