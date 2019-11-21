@extends('drives.layout')

@section('content')


<div class="search">
    <input type="search" placeholder="Find a file.." field_signature="260277693">
</div>

<div class="breadcrumbs"><a href="files"><span class="folderName">files</span></a> <span class="arrow">→</span> <a
        href="files/Archives"><span class="folderName">Archives</span></a> <span class="arrow">→</span> <span
        class="folderName">files</span></div>
@if (!empty($contents))
<ul class="data animated" style="">
    @forelse ($contents as $item)
    @if ($item->type == 'file')
    <li class="files">
        <a href="{{ route('dw', ['idir' => trim( $item->basename . (!empty($item->dirname) ? ".$item->dirname": '') ) ]) }}" title="{{ $item->name }}" class="files">
            <span class="icon file f-{{ $item->extension }}">{{ $item->extension }}</span>
            <span class="name">{{ $item->name }}</span>
            <span class="details">{{ $item->size }} Bytes</span>
        </a>
    </li>
    @else
    <li class="folders">
        <a href="files/Archives" title="files/Archives" class="folders">
            <span class="icon folder full"></span>
            <span class="name">Archives</span>
            <span class="details">3 items</span>
        </a>
    </li>
    @endif
    @empty

    @endforelse


</ul>
@else
<div class="nothingfound" style="display: none;">
    <div class="nofiles"></div>
    <span>No files here.</span>
</div>
@endif
@endsection
