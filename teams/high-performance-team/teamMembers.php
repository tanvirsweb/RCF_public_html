<div class="row" id="team-members-showing">
    <div class="memberCol col-12 col-md-6 col-lg-4">
        <div class="card">
            <h3> Tahmim Hossain</h3>
            <h5> Director, ECE'16 </h5>
        </div>
    </div>
    <div class="memberCol col-12 col-md-6 col-lg-4">
        <div class="card">
            <h3> Nafis Shahriar</h3>
            <h5> Additional Director, EEE'16 </h5>
        </div>
    </div>
    <div class="memberCol col-12 col-md-6 col-lg-4">
        <div class="card">
            <h3> Shahreen Ahmed</h3>
            <h5> Additional Director, CE'16 </h5>
        </div>
    </div>
    <div class="memberCol col-12 col-md-6 col-lg-4">
        <div class="card">
            <h3> Sohaeb Bin Islam Siam</h3>
            <h5> Leader, IPE'17 </h5>
        </div>
    </div>
    <div class="memberCol col-12 col-md-6 col-lg-4">
        <div class="card">
            <h3> Kawshik Banarjee</h3>
            <h5> Leader, CSE'17 </h5>
        </div>
    </div>
    <div class="memberCol col-12 col-md-6 col-lg-4">
        <div class="card">
            <h3> Fairuz Nawer Mela</h3>
            <h5> Leader, IPE'17 </h5>
        </div>
    </div>
</div>
<div class="row collapse" id="collapsibleMembers">
    <div class="memberCol col-12 col-md-6 col-lg-4">
        <div class="card">
            <h3> Mohua Biswas</h3>
            <h5> Leader, ETE'17 </h5>
        </div>
    </div>
</div>
<!-- <div class="row">
    <div class="col-md-3 col-sm-6 py-3">
        <div class="team-member">
            <img src="<?php echo BASE_URL; ?>/assets/img/avatar.jpg" alt="" class="img-fluid">
        </div>
        <div class="descriptions text-white text-center pt-3">
            <span class="d-block lead">John Doe</span>
            <span class="d-block font-weight-lighter">Project Manager</span>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 py-3">
        <div class="team-member">
            <img src="<?php echo BASE_URL; ?>/assets/img/avatar.jpg" alt="" class="img-fluid">
        </div>
        <div class="descriptions text-white text-center pt-3">
            <span class="d-block lead">John Doe</span>
            <span class="d-block font-weight-lighter">Project Manager</span>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 py-3">
        <div class="team-member">
            <img src="<?php echo BASE_URL; ?>/assets/img/avatar.jpg" alt="" class="img-fluid">
        </div>
        <div class="descriptions text-white text-center pt-3">
            <span class="d-block lead">John Doe</span>
            <span class="d-block font-weight-lighter">Project Manager</span>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 py-3">
        <div class="team-member">
            <img src="<?php echo BASE_URL; ?>/assets/img/avatar.jpg" alt="" class="img-fluid">
        </div>
        <div class="descriptions text-white text-center pt-3">
            <span class="d-block lead">John Doe</span>
            <span class="d-block font-weight-lighter">Project Manager</span>
        </div>
    </div>
</div> -->

<div class="row pt-4">
    <button type="button" class="mx-auto btn btn-outline-primary"
            onclick="ToggleCollapse(this)">
        View More
    </button>
</div>

<script>
    var collapsed = true;
    function ToggleCollapse(btn) {
        $('#collapsibleMembers').collapse('toggle');
        collapsed = !collapsed;
        if (collapsed) {
            btn.innerHTML = 'View More';
            $(btn).removeClass('btn-primary');
            $(btn).addClass('btn-outline-primary');
        }
        else {
            btn.innerHTML = 'View Less';
            $(btn).removeClass('btn-outline-primary');
            $(btn).addClass('btn-primary');
        }
    }
</script>
