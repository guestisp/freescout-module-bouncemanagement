<div class="form-group{{ $errors->has('bounce_action') ? ' has-error' : '' }}">
    <label for="bounce_action" class="col-sm-2 control-label">{{ __('Action on bounce') }}</label>

    <div class="col-sm-6">
        <select id="bounce_action" class="form-control input-sized" name="bounce_action" required autofocus>
            <option value="{{ Modules\BounceManagement\Entities\BounceManagement::ACTION_CREATE }}" @if (old('bounce_action', $mailbox->bounce_action) === Modules\BounceManagement\Entities\BounceManagement::ACTION_CREATE)selected="selected"@endif>{{ __('Create a new conversation') }}</option>
            <option value="{{ Modules\BounceManagement\Entities\BounceManagement::ACTION_IGNORE }}" @if (old('bounce_action', $mailbox->bounce_action) === Modules\BounceManagement\Entities\BounceManagement::ACTION_IGNORE)selected="selected"@endif>{{ __('Silently ignore the bounce') }}</option>
        </select>
    </div>
</div>