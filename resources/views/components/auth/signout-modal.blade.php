<!-- Logout Modal -->
<div class="modal fade" id="logoutModal" aria-hidden="true" aria-labelledby="logoutModalLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body" style="padding:2rem;">
                <h2>Are you sure to logout?</h2>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <div class="d-flex justify-content-center mt-5">
                        <button class="col-lg-4 btn btn-primary" type="submit">Logout</button>
                        <span>
                            <pre>   </pre>
                        </span>
                        <button type="button" class="col-lg-4 btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
