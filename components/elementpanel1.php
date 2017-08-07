<div class="flex-column">
  <div class="flex-row ph-80 flex-column-mobile">
    <div class="flex-column width-50 width-50-tablet width-100-mobile pr-80 ph-30-tablet pln">
      <span class="em-500 f-18">Tooltips</span>
      <hr>
      <div class="flex-row flex-between flex-column-mobile">
        <div class="flex-column flex-center">
          <div class="popover top message-contextual">
            <div class="arrow"></div>
            <div class="popover-inner">
              <div class="popover-content">
                <p class="mbn text-center" style="font-size: 12pt;">This rate will expire after 10 minutes. If that happens please restart your trade.</p>
              </div>
            </div>
          </div>
          <button type="button" name="button" class="helper active mhn mt-15">
            <span class="close-helper"></span>
          </button>
        </div>
        <div id="tooltip-help" class="flex-row flex-end flex-start-mobile pv-10-mobile">
          <button type="button" name="button" class="helper span mhn mr-5">
            <span class="open-helper">?</span>
          </button>
          <span class="width-70 width-70-tablet">Tooltip should always appear above this icon</span>
        </div>
      </div>
      <span class="pt-30 em-500 f-18">Exit Dialogs</span>
      <hr>
      <div class="modal-dialogue">
        <div class="modal-content">
          <div class="modal-body">
            <h4><i class="security-red mrs ti-alert"></i> <span>Are You Sure?</span></h4>
            <p class="em-300 ptm">
              You’re just a few steps from exchaging bitcoin, are you sure want to stop?
            </p>
          </div>
          <div class="modal-footer flex-end flex-center">
            <button type="button" class="button-muted mrm" name="button">Cancel</button>
            <button type="button" class="button-danger mrm" name="button">I'm Done</button>
          </div>
        </div>
      </div>
    </div>
    <div class="flex-column width-50 width-50-tablet width-100-mobile ph-30-tablet pln pv-20-mobile">
      <span class="em-500 f-18">Secondary Navigation</span>
      <hr>
      <bc-tabs>
        <div class="filter-bar auto flex-center flex-between flex-start-mobile">
          <div class="filter-buttons pvl">
            <a class="black em-400 upper f-16 spaced active">Exchange</a>
            <a class="black em-400 upper f-16 spaced">Order History</a>
          </div>
        </div>
      </bc-tabs>
      <span class="pt-30 em-500 f-18">Order Confirmation</span>
      <hr>
      <ul class="f-13 em-300 bg-grey border pv-10 ph-10 mb-20">
        <li class="pb-10 border-bottom-light flex-between">
          <span class="em-500 colon ng-scope"><span class="capitalize">Bitcoin</span> to Deposit</span>
          <span class="em-300 right-align ng-binding">0.00088906 BTC ($2.56)</span>
        </li>
        <li class="pv-10 border-bottom-light flex-between">
          <span class="em-500 colon ng-scope" translate=".TO_RECEIVE" translate-values="{output: human[output]}"><span class="capitalize">Ether</span> to be Received</span>
          <span class="em-300 right-align ng-binding">0.00642872 ETH ($1.43)</span>
        </li>
        <li class="pv-10 border-bottom-light flex-between">
          <span class="em-500 colon ng-scope">Exchange Rate</span>
          <span class="em-300 right-align ng-binding">1 BTC = 12.8548387 ETH</span>
        </li>
        <li class="pt-10 flex-between">
          <span class="em-500 colon ng-scope" translate="TX_FEE">Transaction Fee</span>
          <span class="em-300 right-align ng-binding">0.0006786 BTC ($1.13)</span>
        </li>
      </ul>
      <span class="pt-30 em-500 f-18">What's New Dropdown</span>
      <hr>
      <div class="popover bottom whats-new-popover">
        <div class="arrow"></div>
        <div class="popover-inner">
          <h3 class="popover-title">What's New?</h3>
          <div class="popover-content" style="background-color:white;">
            <li><h4>Send and Receive Ether <small class="border-grey mlm">7/24/17</small></h4>
              <p>
                <span style="font-size: 12pt;">You can now send and receive ether from your Blockchain wallet!</span>
              </p>
            </li>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="flex-column ph-90">
    <span class="pt-30 em-500 f-18">Order History Tab</span>
    <hr>
    <div class="width-100 mb-30" style="max-width:1200px;">
      <div class="shift-history border bg-light-blue">
        <div class="pvs"><span class="em-500 pl-25">Status</span></div>
        <div class="pvs"><span class="em-500">Date</span></div>
        <div class="pvs"><span class="em-500">Exchanged</span></div>
        <div class="pvs"><span class="em-500">Received</span></div>
      </div>
      <div class="exchange-trade border-right border-bottom border-left">
        <div class="exchange-status pv-15">
          <span class="pl-25 state medium-blue">In Progress</span>
          <a class="hidden-xs" ng-click="$ctrl.viewDetails($ctrl.trade)">View Details</a>
        </div>
        <div class="exchange-date pv-15"><span>3 August 2017, 10:37</span></div>
        <div class="exchange-exchanged pv-15"><span class="upper ng-binding">0.06 eth</span></div>
        <div class="exchange-received pv-15"><span class="upper ng-binding mid-grey opacity-5">0.00292186 btc</span></div>
      </div>
    </div>
  </div>
</div>
