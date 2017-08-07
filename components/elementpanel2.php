<div class="flex-row ph-80 flex-column-mobile">
  <div class="flex-column width-50 width-50-tablet width-100-mobile pr-80 ph-30-tablet pln">
    <span class="em-500 f-18">Buttons</span>
    <hr>
    <span class="em-300 pb-15">PRIMARY BUTTON LARGE</span>
    <div class="flex-row flex-between">
      <div class="flex-column width-50 pr-45">
        <button type="button" class="button-primary width-100" name="button">0.110253 BTC</button>
        <span class="pt-5">Active - spans width of fields</span>
      </div>
      <div class="flex-column width-50 pr-45">
        <button type="button" class="button-primary width-100" name="button" disabled="disabled">0.110253 BTC</button>
        <span class="pt-5">Inactive - spans width of fields</span>
      </div>
    </div>
    <span class="em-300 pt-30 pb-15">PRIMARY BUTTON</span>
    <div class="flex-row flex-start">
      <div class="flex-column pr-45">
        <button type="button" class="button-primary" name="button">CONTINUE</button>
        <span class="pt-5">Active</span>
      </div>
      <div class="flex-column">
        <button type="button" class="button-primary" name="button" disabled="disabled">CONTINUE</button>
        <span class="pt-5">Inactive</span>
      </div>
    </div>
    <span class="em-300 pt-30 pb-15">SECONDARY BUTTON</span>
    <div class="flex-row flex-between flex-column-tablet flex-column-mobile">
      <div class="flex-column">
        <button type="button" class="button-sent" name="button">0.110253 BTC</button>
        <span class="pt-5">Sent</span>
        <button type="button" class="button-sent mt-20" name="button" disabled="disabled">0.110253 BTC</button>
        <span class="pt-5">Pending Sent</span>
      </div>
      <div class="flex-column">
        <button type="button" class="button-received" name="button">0.110253 BTC</button>
        <span class="pt-5">Received</span>
        <button type="button" class="button-received mt-20" name="button" disabled="disabled">0.110253 BTC</button>
        <span class="pt-5">Pending Received</span>
      </div>
      <div class="flex-column">
        <button type="button" class="button-transferred" name="button">0.110253 BTC</button>
        <span class="pt-5">Transferred</span>
        <button type="button" class="button-transferred mt-20" name="button" disabled="disabled">0.110253 BTC</button>
        <span class="pt-5">Pending Transferred</span>
      </div>
    </div>
    <span class="em-300 pt-30 pb-15">OTHER BUTTONS</span>
    <div class="flex-row">
      <button type="button" class="btn button-default button-short-wide type-h5 mrm">
        <i class="mrs media-middle icon-send"></i>
        <span class="em-300">Send</span>
      </button>
      <button class="btn button-default button-short-wide type-h5 pos-rel">
        <i class="mrs media-middle icon-receive"></i>
        <span class="em-300 ng-scope">Request</span>
      </button>
    </div>
    <span class="em-300 pt-30 ">LINKS</span>
    <a class="em-300 pt-5 pb-15 primary">Download iOS app</a>
  </div>

  <div class="flex-column width-50 width-50-tablet width-100-mobile pr-80 ph-30-tablet pln">
    <span class="em-500 f-18">Forms</span>
    <hr>
    <span class="em-600 pb-5">Label - 5px above field</span>
    <input class="form-control mb-15" style="border-color:#DDD;background-color:white;cursor:text;" value="Input value" readonly="readonly">
    <input class="form-control mb-15" style="border-color:#DDD;background-color:white;" placeholder="Placeholder...">
    <input class="form-control mb-15" style="border-color:#039bd3;background-color:white;" placeholder="Focus">
    <input class="form-control" style="border-color:#b83940;background-color:white;" placeholder="Error">
    <span class="help-block">
      <div class="" style="">
        <p class="ng-scope ng-hide" style="">Error messaging - 5px below field</p>
      </div>
    </span>
    <form class="bc-form">
      <div class="radio-group">
        <div class="radio-label">
          <input name="rbutton" type="radio" id="1">
          <label for="1" style="border-bottom-width: 0;">Radio Label</label>
        </div>
        <div class="radio-label">
          <input name="rbutton" type="radio" id="2">
          <label for="2" style="border-top-width: 0;">Radio Label</label>
        </div>
      </div>
    </form>
  </div>
</div>
