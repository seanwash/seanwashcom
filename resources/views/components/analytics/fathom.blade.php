@if(config('analytics.enabled'))
    <script
        src="{{ config('analytics.fathom.script_url') }}"
        data-site="{{ config('analytics.fathom.site_id') }}" defer
    ></script>
@endif
