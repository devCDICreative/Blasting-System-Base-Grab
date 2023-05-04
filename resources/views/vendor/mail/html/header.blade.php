<tr>
    <td class="header">
      <table class="footer" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
        <tr>
            <td class="content-cell" align="left">
              {{ $slot }}
            </td>
        </tr>
    </table>
        {{-- <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
            <img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">
            @else
            {{ $slot }}
            @endif
        </a> --}}
    </td>
</tr>
