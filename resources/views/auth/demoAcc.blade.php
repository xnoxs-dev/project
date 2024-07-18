@if(count($users))
    <div class="table-responsive-sm">
        <table id="search_users_table" class="table table-sm table-hover table-striped">
            <tbody>

            </tbody>
        </table>
    </div>
@else
    <div class="col-12 text-center my-3">
        <h4>No available accounts. Please refresh or signup</h4>
    </div>
@endif
