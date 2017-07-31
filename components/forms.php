<div id="forms" class="prm pll catagory width-100">
  <h3> Form/Modal Components </h3>
  <form role="form" name="accountForm" autocomplete="off" novalidate="novalidate" data-preflight-tag="AccountForm" class="bc-form">
    <div class="modal-header">
      <div class="flex-center">
        <h3 class="man mrm"> Lorem Ipsem</h3>
      </div>
    </div>
    <div class="modal-body">
      <div class="group mb-20">
        <div class="item">
          <label>Input a</label>
          <input name="new" maxlength="17" required="required"/>
        </div>
      </div>
      <div class="group mb-20">
        <div class="item">
          <label>Input b</label>
          <input name="new" maxlength="17" required="required"/>
        </div>
      </div>
      <div class="item mt-20">
        <label class="colon">Amount</label>
        <div class="flex-center">
          <div class="flex-1 flex-center border">
            <input type="number" name="amount" tabindex="1" placeholder="0" min="1" max="2100000000000000" required="required" class="form-control no-border"/><span class="mhm">FOO</span>
          </div><i class="ti-arrows-horizontal h4 border-grey phm hidden-xs"></i>
          <div class="flex-1 flex-center border">
            <input type="number" name="fiatAmount" tabindex="1" placeholder="0" min="1" max="2100000000000000" required="required" class="form-control no-border"/><span class="mhm">BAR</span>
          </div>
        </div>
        <div class="has-error"><span class="state-danger-text"><span class="type-sm"></span></span><span class="help-block"><span class="type-sm pointer">Error message</span></span></div>
      </div>
      <div class="item mt-20">
        <label><span> Description </span>
        </label>
        <div class="flex-1">
          <textarea rows="4"name="note" maxlength="512" placeholder="Placeholder" class="pas"></textarea>
        </div>
      </div>
    </div>
    <div class="modal-body group">
      <div class="group inline flex-center mt-20">
        <div class="item inline width-60 width-60-mobile">
          <label class="mbn colon">Dropdown</label>
          <select name="fee" tabindex="" required="" class="ng-valid ng-not-empty ng-valid-required ng-touched ng-dirty ng-valid-parse">
            <option label="Regular" value="string:regular" selected="selected">Item 1</option>
            <option label="Priority" value="string:priority">Item 2</option>
          </select>
        </div>
        <div class="item right-align width-40 width-40-mobile"><span>$1,000,000,000</span></div>
      </div>
      <div class="group inline mt-5">
        <div class="item inline width-100 flex-between"><span class="f-12">Hello World</span><a class="f-12">Make changes</a></div>
      </div>
    </div>
    <div class="modal-footer pal flex-end flex-center">
      <button type="button" class="button-muted mrm">Cancel</button>
      <button type="button" class="button-primary">Submit</button>
    </div>
  </form>
</div>
