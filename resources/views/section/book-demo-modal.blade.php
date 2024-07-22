<!-- Modal -->
<div class="modal fade" id="bookDemo" tabindex="-1" aria-labelledby="bookDemoLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered modal-lg">
        <div class="modal-content demo-modal">
            <p class="caption-title text-center mb-2">
                Speak with an expert
            </p>
            <p class="caption-sub-title text-center mb-4">
                <span>Please fill the fields below
                </span>
            </p>

            <div class="form-demo-modal">
                <form action="">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" class="demo-modal-input" placeholder="Your Name">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="demo-modal-input" placeholder="Phone Number">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="demo-modal-input" placeholder="Email">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="demo-modal-input" placeholder="Company">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="demo-modal-input" placeholder="Choose a Date">
                        </div>
                        <div class="col-md-12">
                            <input type="text" class="demo-modal-input" placeholder="Location">
                        </div>
                    </div>
                    <div class="demo-modal-butttons">
                        <button class="close-btn" data-bs-dismiss="modal">close</button>
                        <button class="hero-learn-more">submit</button>
                    </div>
                </form>
            </div>
            {{-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> --}}
        </div>
    </div>
</div>
