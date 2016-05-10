@extends('app')
@section('content')
        <p>&nbsp;</p>
        <p>&nbsp;</p>
        <h2>Rapid Survey on R&D Disciplines in UPM</h2>
        <p>Deputy Vice Chancellor's Office (Research and Innovation)</p>
        <p><a class="btn btn-primary btn-lg" href="/info" role="button">Learn More &raquo;</a></p>
<nav class="navbar navbar-inverse navbar-fixed-top">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">A Survey for UPM Academics</a>
        </div>

</nav>
<!-- Main jumbotron for a primary marketing message or call to action -->

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form class="form-horizontal" role="form" method="post" action="https://analytics.upm.edu.my/forseo?">
                <fieldset>
                    <input type="hidden" name="_token" value="x2yA3blURK2vCfX3WcdIwd0rwITv9Zv2q36Sruxj">
                    <input type="hidden" name="querystring" id="querystring" class="form-control" value="" />
                    <input type="hidden" name="ip" id="ip" class="form-control" value="10.206.4.124" />
                    <div class="form-group">
                        <label for="staffid" class="col-sm-3 control-label required">Staff ID</label>
                        <div class="col-sm-9" placement="top" data-toggle="tooltip" data-placement="auto"
                             title="Your UPM staff ID">
                            <input type="text" class="form-control" id="staffid" name="staffid"
                                   placeholder="eg. A05410"
                                   value=""/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label required" data-toggle="tooltip"
                               data-placement="auto"
                               title="Author names that you have used in your publications! eg.
                                   Faridah Mohamed Arshad; F. M. Arshad; Faridah, M. A.;
                                       Faridah Mohd Arshad; Faridah Mohd. Arshad; Faridah FM">Author
                            Names</label>
                        <div class="col-sm-9" data-toggle="tooltip" data-placement="top"
                             title="Author names that you have used in your publications.">
                            <input type="text" class="form-control" id="authornames" name="authornames"
                                   placeholder="eg. Faridah Mohamed Arshad; F. M. Arshad; Faridah, M. A.;
                                       Faridah Mohd Arshad; Faridah Mohd. Arshad; Faridah FM"
                                   value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label required">Fields of Research (FOR)</label>
                        <div class="col-sm-9" placement="top" data-toggle="tooltip" data-placement="auto"
                             title="FORs classify R&D activities according to their scientific and academic disciplines (see MRDCS 6th Ed. 2011 MOSTI/MASTIC). You may choose more than ONE FOR"
                             value="">
                            <input type="text" class="form-control" id="forarea" name="forarea"
                                   placeholder="Type to search or select from this dropdown list..." />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Socio-economic Objectives (SEO)</label>
                        <div class="col-sm-9" placement="top" placeholder="eg. Education, Banking"
                             data-toggle="tooltip" data-placement="auto"
                             title="SEOs categorize R&D activities according to their purposes or benefits to economic, social, environmental, technological sectors or scientific domain (see MRDCS 6th Ed. 2011 MOSTI/MASTIC). You may choose more than ONE SEO.">
                            <input type="text" class="form-control" id="seo" name="seo"
                                   placeholder="Type to search or select from this dropdown list..." />
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Comments</label>
                        <div class="col-sm-9" placement="top" placeholder="" data-toggle="tooltip"
                             data-placement="auto" title="Your comments are welcome.">
                            <input type="text" class="form-control" id="comments" name="comments" placeholder=""
                                   value=""/>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="message" class="col-sm-3 control-label"></label>
                        <div class="col-sm-9">
                            <input type="hidden" name="_token" value="x2yA3blURK2vCfX3WcdIwd0rwITv9Zv2q36Sruxj">
                            <input id="submit" name="submit" type="submit" value="Submit"
                                   class="btn btn-primary">
                            <input id="reset" name="reset" type="reset" value="Clear" class="btn btn-warning">
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>



<hr />

    <footer>
        <p>&copy; 2016 Universiti Putra Malaysia. All rights reserved.</p>
    </footer>

@endsection
