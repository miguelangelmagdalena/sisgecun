<footer class="app-footer">
    <div class="site-footer-right">
        {!! __(Voyager::setting('admin.footer_description')) !!}
        @php $version = Voyager::getVersion(); @endphp
        @if (!empty($version))
            <a href="https://laravelvoyager.com/" target="_blank"> - {{ $version }}</a>
        @endif
    </div>
</footer>
