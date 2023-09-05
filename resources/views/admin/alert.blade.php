<x-admin-layout>
    <!-- strat content -->
    <div class="bg-gray-100 flex-1 p-6 md:mt-16">
        <h1 class="h5">alerts</h1>
        <p>
            Use cleopatra custom alerts styles for actions , notifcations etc.
        </p>
        <p>
            so far there's just 3 type of alerts feel free to submit a pull
            request
        </p>

        <hr class="my-5" />
        <div class="card">
            <div class="card-header">
                simple alert - you can always use
                <span class="badge badge-primary">.alert</span> class along with
                <span class="badge badge-primary">.alert-(type)</span>
            </div>

            <div class="card-body">
                <div class="alert mb-5">A simple alert it out!!</div>

                <div class="alert alert-default mb-5">
                    A simple alert it out!
                </div>

                <div class="alert alert-light mb-5">A simple alert it out!</div>

                <div class="alert alert-dark mb-5">A simple alert it out!</div>

                <div class="alert alert-success mb-5">
                    A simple alert it out!
                </div>

                <div class="alert alert-error">A simple alert it out!</div>
            </div>

            <div class="card-footer">
                <script type="text/plain" class="language-html">
                    <div class="alert mb-5">
                        A simple alert it out!
                    </div>

                    <div class="alert alert-default mb-5">
                        A simple alert it out!
                    </div>

                    <div class="alert alert-light mb-5">
                        A simple alert it out!
                    </div>

                    <div class="alert alert-dark mb-5">
                        A simple alert it out!
                    </div>

                    <div class="alert alert-success mb-5">
                        A simple alert it out!
                    </div>

                    <div class="alert alert-error">
                        A simple alert it out!
                    </div>
                </script>
            </div>
        </div>
        <div class="card mt-5">
            <div class="card-header">
                any
                <span class="badge badge-primary">a tag</span> inside alert will
                have font
                <span class="badge badge-primary">font-weight: 900</span>
            </div>

            <div class="card-body">
                <div class="alert mb-5">
                    a simple alert it out! with
                    <a href="#">alert link</a> click it now.
                </div>

                <div class="alert alert-default mb-5">
                    a simple alert it out! with
                    <a href="#">alert link</a> click it now.
                </div>

                <div class="alert alert-light mb-5">
                    a simple alert it out! with
                    <a href="#">alert link</a> click it now.
                </div>

                <div class="alert alert-dark mb-5">
                    a simple alert it out! with
                    <a href="#">alert link</a> click it now.
                </div>

                <div class="alert alert-success mb-5">
                    a simple alert it out! with
                    <a href="#">alert link</a> click it now.
                </div>

                <div class="alert alert-error">
                    a simple alert it out! with
                    <a href="#">alert link</a> click it now.
                </div>
            </div>

            <div class="card-footer">
                <script type="text/plain" class="lang-html">

                    <div class="alert mb-5">
                        a simple alert it out! with
                        <a href="#">alert link</a>
                        click it now.
                    </div>

                    <div class="alert alert-default mb-5">
                        a simple alert it out! with
                        <a href="#">alert link</a>
                        click it now.
                    </div>

                    <div class="alert alert-light mb-5">
                        a simple alert it out! with
                        <a href="#">alert link</a>
                        click it now.
                    </div>

                    <div class="alert alert-dark mb-5">
                        a simple alert it out! with
                        <a href="#">alert link</a>
                        click it now.
                    </div>

                    <div class="alert alert-success mb-5">
                        a simple alert it out! with
                        <a href="#">alert link</a>
                        click it now.
                    </div>

                    <div class="alert alert-error">
                        a simple alert it out! with
                        <a href="#">alert link</a>
                        click it now.
                    </div>
                </script>
            </div>
        </div>
        <div class="card mt-5">
            <div class="card-header">
                Dismissing alert using simple function to dismiss alert , alert
                will take class animated & fadeOut and elemnt will be removed
                <br />
                for more check
                <span class="badge badge-primary">alert.js</span>
                you have to follow the same structure
            </div>

            <div class="card-body">
                <div class="alert mb-5 alert-close">
                    <button class="alert-btn-close">
                        <i class="fad fa-times"></i>
                    </button>
                    <span>A simple alert it out!</span>
                </div>

                <div class="alert alert-default alert-close mb-5">
                    <button class="alert-btn-close">
                        <i class="fad fa-times"></i>
                    </button>
                    <span>A simple alert it out!</span>
                </div>

                <div class="alert alert-light alert-close mb-5">
                    <button class="alert-btn-close">
                        <i class="fad fa-times"></i>
                    </button>
                    <span>A simple alert it out!</span>
                </div>

                <div class="alert alert-dark alert-close mb-5">
                    <button class="alert-btn-close">
                        <i class="fad fa-times"></i>
                    </button>
                    <span>A simple alert it out!</span>
                </div>

                <div class="alert alert-success alert-close mb-5">
                    <button class="alert-btn-close">
                        <i class="fad fa-times"></i>
                    </button>
                    <span>A simple alert it out!</span>
                </div>

                <div class="alert alert-error alert-close">
                    <button class="alert-btn-close">
                        <i class="fad fa-times"></i>
                    </button>
                    <span>A simple alert it out!</span>
                </div>
            </div>

            <div class="card-footer">
                <script type="text/plain" class="language-html">
                    <div class="alert mb-5 alert-close">
                        <button class="alert-btn-close">
                            <i class="fad fa-times"></i>
                        </button>
                        <span>A simple alert it out!</span>
                    </div>

                    <div class="alert alert-default alert-close mb-5">
                        <button class="alert-btn-close">
                            <i class="fad fa-times"></i>
                        </button>
                        <span>A simple alert it out!</span>
                    </div>

                    <div class="alert alert-light alert-close mb-5">
                        <button class="alert-btn-close">
                            <i class="fad fa-times"></i>
                        </button>
                        <span>A simple alert it out!</span>
                    </div>

                    <div class="alert alert-dark alert-close mb-5">
                        <button class="alert-btn-close">
                            <i class="fad fa-times"></i>
                        </button>
                        <span>A simple alert it out!</span>
                    </div>

                    <div class="alert alert-success alert-close mb-5">
                        <button class="alert-btn-close">
                            <i class="fad fa-times"></i>
                        </button>
                        <span>A simple alert it out!</span>
                    </div>

                    <div class="alert alert-error alert-close">
                        <button class="alert-btn-close">
                            <i class="fad fa-times"></i>
                        </button>
                        <span>A simple alert it out!</span>
                    </div>
                </script>
            </div>
        </div>
    </div>
    <!-- end content -->
</x-admin-layout>
