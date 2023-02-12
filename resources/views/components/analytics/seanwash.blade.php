@if(config('analytics.enabled'))
    <script
        src="{{ config('analytics.seanwash.script_url') }}"
        data-website="{{ config('analytics.seanwash.site_id') }}"
    ></script>
@endif
