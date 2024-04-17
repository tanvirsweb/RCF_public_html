<div class="row" id="team-members-showing">
    <div class="row" id="team-members-showing">
        <div class="memberCol col-12 col-md-6 col-lg-4">
            <div class="card">
                <h3> Ayon Ganguly </h3>
                <h5> Executive Member, ETE'20 </h5>
            </div>
        </div>
        <div class="memberCol col-12 col-md-6 col-lg-4">
            <div class="card">
                <h3> Jakia Ahmed Toshmi </h3>
                <h5> Executive member, URP'20 </h5>
            </div>
        </div>
        <div class="memberCol col-12 col-md-6 col-lg-4">
            <div class="card">
                <h3> Emran Hassan </h3>
                <h5> Executive Member, EEE'20 </h5>
            </div>
        </div>
        <div class="memberCol col-12 col-md-6 col-lg-4">
            <div class="card">
                <h3> Zarin Anan Adeeba </h3>
                <h5> Executive Member, CE'20 </h5>
            </div>
        </div>
        <div class="memberCol col-12 col-md-6 col-lg-4">
            <div class="card">
                <h3> Priyanti Dam </h3>
                <h5> Executive Member, CE'20 </h5>
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
        } else {
            btn.innerHTML = 'View Less';
            $(btn).removeClass('btn-outline-primary');
            $(btn).addClass('btn-primary');
        }
    }
</script>