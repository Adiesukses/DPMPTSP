<td>
    @if($keg->tanggal ==  Carbon\Carbon::today())
            <a class="btn btn-danger btn-sm">
                    <i class="fas fa-flag">
                    </i>
                    Selesai
                </a>

            @else
<a class="btn btn-danger btn-sm disabled">
                    <i class="fas fa-flag">
                    </i>
                    Selesai
                </a>

            @endif
           
</td>         