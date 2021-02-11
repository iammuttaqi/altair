<script>
    function notify(ele){

        ele.style.display = "none";
    }


</script>


      <div class="uk-grid" data-uk-grid-margin>
            <div class="uk-width-1-1">
                @if(Session::has('info'))
                <div class="uk-alert uk-alert-info" data-uk-alert>
                    <a href="#" class="uk-alert-close uk-close"></a>
                    {{ Session::get('info') }}
                </div>
               @endif
                @if(Session::has('danger'))
                <div class="uk-alert uk-alert-danger" data-uk-alert>
                    <a href="#" class="uk-alert-close uk-close"></a>
                    {{ Session::get('danger') }}
                </div>
                @endif
              @if(Session::has('warning'))
                <div class="uk-alert uk-alert-warning" data-uk-alert>
                    <a href="#" class="uk-alert-close uk-close"></a>
                    {{ Session::get('warning') }}
                </div>
              @endif
                    @if(Session::has('success'))
                <div class="uk-alert uk-alert-success" data-uk-alert>
                    <a href="#" class="uk-alert-close uk-close"></a>
                    {{ Session::get('success') }}
                </div>
                  @endif
                    @if(Session::has('alert'))
                <div class="uk-alert uk-alert" data-uk-alert>
                    <a href="#" class="uk-alert-close uk-close"></a>
                    {{ Session::get('alert') }}
                </div>
                    @endif
                @if(Session::has('message'))
                <div class="uk-alert uk-alert-large" data-uk-alert>
                    <a href="#" class="uk-alert-close uk-close"></a>
                    <h4 class="heading_b">Notice</h4>
                    {{ Session::get('message') }}
                </div>
                @endif
            </div>
        </div>
