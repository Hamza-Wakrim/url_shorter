<a href="#" class="btn d-flex align-items-center btn-sm text-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@include('icons.more-horiz', ['class' => 'fill-current width-4 height-4'])&#8203;</a>

<div class="dropdown-menu {{ (__('lang_dir') == 'rtl' ? 'dropdown-menu' : 'dropdown-menu-right') }} border-0 shadow">
    <a class="dropdown-item d-flex align-items-center" href="{{ request()->is('admin/*') ? route('admin.spaces.edit', $space->id) : route('spaces.edit', $space->id) }}">@include('icons.edit', ['class' => 'text-muted fill-current width-4 height-4 '.(__('lang_dir') == 'rtl' ? 'ml-3' : 'mr-3')]) {{ __('Edit') }}</a>

    <a class="dropdown-item d-flex align-items-center" href="{{ request()->is('admin/*') ? route('admin.links', ['space_id' => $space->id]) : route('links', ['space_id' => $space->id]) }}">@include('icons.link', ['class' => 'text-muted fill-current width-4 height-4 '.(__('lang_dir') == 'rtl' ? 'ml-3' : 'mr-3')]) {{ __('Links') }}</a>

    <div class="dropdown-divider"></div>
    
    <a class="dropdown-item text-danger d-flex align-items-center" href="#" data-toggle="modal" data-target="#modal" data-action="{{ request()->is('admin/*') ? route('admin.spaces.destroy', $space->id) : route('spaces.destroy', $space->id) }}" data-button="btn btn-danger" data-title="{{ __('Delete') }}" data-text="{{ __('Deleting this space is permanent, and will remove all the links associated with it.') }}" data-sub-text="{{ __('Are you sure you want to delete :name?', ['name' => $space->name]) }}">@include('icons.delete', ['class' => 'fill-current width-4 height-4 '.(__('lang_dir') == 'rtl' ? 'ml-3' : 'mr-3')]) {{ __('Delete') }}</a>
</div>