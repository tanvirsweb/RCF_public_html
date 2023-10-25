<div class="row" id="team-members-showing">
    <div class="memberCol col-12 col-md-6 col-lg-4">
        <div class="card">
            <h3> Rahib Elias</h3>
            <h5> Executive Member, ME'19 </h5>
        </div>
    </div>
    <div class="memberCol col-12 col-md-6 col-lg-4">
        <div class="card">
            <h3> Kawsar Sarkar</h3>
            <h5> Executive Member, ME'19  </h5>
        </div>
    </div>
    <div class="memberCol col-12 col-md-6 col-lg-4">
        <div class="card">
            <h3> Fayeq Azmain</h3>
            <h5> Executive Member, IPE'19  </h5>
        </div>
    </div>
    <div class="memberCol col-12 col-md-6 col-lg-4">
        <div class="card">
            <h3> Muttaky Akhter Mohona</h3>
            <h5> Executive Member, CE'19  </h5>
        </div>
    </div>
    <div class="memberCol col-12 col-md-6 col-lg-4">
        <div class="card">
            <h3> Shanon Goswami</h3>
            <h5> Executive Member, CE'19 </h5>
        </div>
    </div>
    <div class="memberCol col-12 col-md-6 col-lg-4">
        <div class="card">
            <h3> Aishwarjo Afifa</h3>
            <h5> Executive Member, ME'19 </h5>
        </div>
    </div>
</div>

<div class="row collapse" id="collapsibleMembers">
    <div class="memberCol col-12 col-md-6 col-lg-4">
        <div class="card">
            <h3> Tasfia Rifa</h3>
            <h5> Executive Member, Archi'19 </h5>
        </div>
    </div>
    <div class="memberCol col-12 col-md-6 col-lg-4">
        <div class="card">
            <h3> Tajnova Akhter</h3>
            <h5> Executive Member, CE'19  </h5>
        </div>
    </div>
    <div class="memberCol col-12 col-md-6 col-lg-4">
        <div class="card">
            <h3> Md. Tanveer Ahamed</h3>
            <h5> Executive member, IPE'19 </h5>
        </div>
    </div>
    <div class="memberCol col-12 col-md-6 col-lg-4">
        <div class="card">
            <h3> Farhan Shahriar Rikto</h3>
            <h5> Executive Member, ME'19  </h5>
        </div>
    </div>
    <div class="memberCol col-12 col-md-6 col-lg-4">
        <div class="card">
            <h3> Md. Abdullah Al Riadh</h3>
            <h5> Executive member, IPE'19 </h5>
        </div>
    </div>
    <div class="memberCol col-12 col-md-6 col-lg-4">
        <div class="card">
            <h3> Sabila Mostafa</h3>
            <h5> Executive Member, ME'19  </h5>
        </div>
    </div>
    <div class="memberCol col-12 col-md-6 col-lg-4">
        <div class="card">
            <h3> Hasibul Islam Rafi</h3>
            <h5> Executive member, IPE'19 </h5>
        </div>
    </div>
   </div>

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