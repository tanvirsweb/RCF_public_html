<div class="row" id="team-members-showing">
    <div class="memberCol col-12 col-md-6 col-lg-4">
        <div class="card">
            <h3> Adiba Afrin </h3>
            <h5> Executive Member, CE'20 </h5>
        </div>
    </div>
    <div class="memberCol col-12 col-md-6 col-lg-4">
        <div class="card">
            <h3> Salma Anika </h3>
            <h5> Executive Member, BECM'20 </h5>
        </div>
    </div>
    <div class="memberCol col-12 col-md-6 col-lg-4">
        <div class="card">
            <h3> Md. Mubtasim Shoumik </h3>
            <h5> Executive Member, CE'20 </h5>
        </div>
    </div>
    <div class="memberCol col-12 col-md-6 col-lg-4">
        <div class="card">
            <h3> Md Fazle Rabbi </h3>
            <h5> Executive Member, ME'20 </h5>
        </div>
    </div>
    <div class="memberCol col-12 col-md-6 col-lg-4">
        <div class="card">
            <h3> Shantonu Nonda </h3>
            <h5> Executive Member, IPE'20 </h5>
        </div>
    </div>
    <div class="memberCol col-12 col-md-6 col-lg-4">
        <div class="card">
            <h3> Md. Kafinur Rhaman </h3>
            <h5> Executive Member, ME'20 </h5>
        </div>
    </div>
    <div class="memberCol col-12 col-md-6 col-lg-4">
        <div class="card">
            <h3> Arfanul Alam Tonoy</h3>
            <h5> Executive Member, CE'20 </h5>
        </div>
    </div>
</div>

<div class="row collapse" id="collapsibleMembers">
    <div class="memberCol col-12 col-md-6 col-lg-4">
        <div class="card">
            <h3> Tuba Khan </h3>
            <h5> Executive Member, MSE'20 </h5>
        </div>
    </div>
    <div class="memberCol col-12 col-md-6 col-lg-4">
        <div class="card">
            <h3> Shawon Mallik </h3>
            <h5> Executive Member, ETE'20 </h5>
        </div>
    </div>
    <div class="memberCol col-12 col-md-6 col-lg-4">
        <div class="card">
            <h3> MD. Ridwan Siddique</h3>
            <h5> Executive member, EEE'20 </h5>
        </div>
    </div>
    <div class="memberCol col-12 col-md-6 col-lg-4">
        <div class="card">
            <h3> Abdullah Al Mamun </h3>
            <h5> Executive Member, ETE'20 </h5>
        </div>
    </div>
</div>

<div class="row pt-4">
    <button type="button" class="mx-auto btn btn-outline-primary" onclick="ToggleCollapse(this)">
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
        } else {
            btn.innerHTML = 'View Less';
            $(btn).removeClass('btn-outline-primary');
            $(btn).addClass('btn-primary');
        }
    }
</script>