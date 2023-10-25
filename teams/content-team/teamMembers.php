<div class="row" id="team-members-showing">
    <div class="row" id="team-members-showing">
    <div class="memberCol col-12 col-md-6 col-lg-4">
    <div class="card">
            <h3> Abdur Rahman</h3>
            <h5> Executive Member, BECM'19 </h5>
        </div>
    </div>
    <div class="memberCol col-12 col-md-6 col-lg-4">
        <div class="card">
            <h3> Md. Emnul Momin</h3>
            <h5> Executive member, ETE'19 </h5>
        </div>
    </div>
    <div class="memberCol col-12 col-md-6 col-lg-4">
        <div class="card">
            <h3> Mahdia Rahman Orchi</h3>
            <h5> Executive Member, BECM'19 </h5>
        </div>
    </div>
    <div class="memberCol col-12 col-md-6 col-lg-4">
        <div class="card">
            <h3> Muttaky Akter Mohona</h3>
            <h5> Executive Member, CE'19 </h5>
        </div>
    </div>
    <div class="memberCol col-12 col-md-6 col-lg-4">
        <div class="card">
            <h3> Tajnova Akther</h3>
            <h5> Executive Member, CE'19 </h5>
        </div>
    </div>
    <div class="memberCol col-12 col-md-6 col-lg-4">
        <div class="card">
            <h3> Subrato Kumar Paul</h3>
            <h5> Executive Member, BECM'19 </h5>
        </div>
    </div>
</div>
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