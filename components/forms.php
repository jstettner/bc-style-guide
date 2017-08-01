<div id="forms" class="prm pll catagory width-100 width-100-mobile">
  <h3> Form/Modal Components </h3>
  <form role="form" name="accountForm" autocomplete="off" novalidate="novalidate" data-preflight-tag="AccountForm" class="bc-form width-70 width-100-mobile">
    <div class="modal-header">
      <div class="flex-center">
        <h3 class="man mrm"> Lorem Ipsem</h3>
      </div>
    </div>
    <div class="code">
      <xmp>
        <div class="modal-header">
          <div class="flex-center">
            <h3 class="man mrm"> Lorem Ipsem</h3>
          </div>
        </div>
      </xmp>
    </div>
    <div class="modal-body">
      <div class="group mb-20">
        <div class="item">
          <label>Input </label>
          <input name="new" maxlength="17" required="required"/>
          <div class="help-block mbn alt-font f-14 hidden-xs"><span>Helper Text.</span></div>
        </div>
      </div>
    </div>
    <div class="code">
      <xmp>
        <div class="group mb-20">
          <div class="item">
            <label>Input </label>
            <input name="new" maxlength="17" required="required"/>
            <div class="help-block mbn alt-font f-14 hidden-xs"><span>Helper Text.</span></div>
          </div>
        </div>
      </xmp>
    </div>
    <div class="modal-body">
      <div class="item mt-20">
        <label class="colon">Amount</label>
        <div class="flex-center">
          <div class="flex-1 flex-center border">
            <input type="number" tabindex="1" placeholder="0" class="form-control no-border"/><span class="mhm">FOO</span>
          </div><i class="ti-arrows-horizontal h4 border-grey phm hidden-xs"></i>
          <div class="flex-1 flex-center border">
            <input type="number" tabindex="1" placeholder="0" class="form-control no-border"/><span class="mhm">BAR</span>
          </div>
        </div>
        <div class="has-error">
          <span class="state-danger-text"><span class="type-sm"></span></span>
          <span class="help-block"><span class="type-sm pointer">Error message</span></span>
        </div>
      </div>
    </div>
    <div class="code">
      <xmp>
        <div class="item mt-20">
          <label class="colon">Amount</label>
          <div class="flex-center">
            <div class="flex-1 flex-center border">
              <input type="number" tabindex="1" placeholder="0" class="form-control no-border"/><span class="mhm">FOO</span>
            </div><i class="ti-arrows-horizontal h4 border-grey phm hidden-xs"></i>
            <div class="flex-1 flex-center border">
              <input type="number" tabindex="1" placeholder="0" class="form-control no-border"/><span class="mhm">BAR</span>
            </div>
          </div>
          <div class="has-error">
            <span class="state-danger-text"><span class="type-sm"></span></span>
            <span class="help-block"><span class="type-sm pointer">Error message</span></span>
          </div>
        </div>
      </xmp>
    </div>
    <div class="modal-body">
      <div class="item mt-20">
        <label><span> Description </span>
        </label>
        <div class="flex-1">
          <textarea rows="4"name="note" maxlength="512" placeholder="Placeholder" class="pas"></textarea>
        </div>
      </div>
    </div>
    <div class="code">
      <xmp>
        <div class="item mt-20">
          <label><span> Description </span>
          </label>
          <div class="flex-1">
            <textarea rows="4"name="note" maxlength="512" placeholder="Placeholder" class="pas"></textarea>
          </div>
        </div>
      </xmp>
    </div>
    <div class="modal-body group">
      <div class="group inline flex-center mt-20">
        <div class="item inline width-60 width-60-mobile">
          <label class="mbn colon">Dropdown</label>
          <select name="fee" tabindex="" required="" class="ng-valid ng-not-empty ng-valid-required ng-touched ng-dirty ng-valid-parse" style="background-image:none;">
            <option label="Regular" value="string:regular" selected="selected">Item 1</option>
            <option label="Priority" value="string:priority">Item 2</option>
          </select>
        </div>
        <div class="item right-align width-40 width-40-mobile"><span>$1,000,000.00</span></div>
      </div>
      <div class="group inline mt-5">
        <div class="item inline width-100 flex-between"><span class="f-12">Hello World</span><a class="f-12">Make changes</a></div>
      </div>
    </div>
    <div class="code">
      <xmp>
        <div class="group inline flex-center mt-20">
          <div class="item inline width-60 width-60-mobile">
            <label class="mbn colon">Dropdown</label>
            <select name="fee" tabindex="" required="" class="ng-valid ng-not-empty ng-valid-required ng-touched ng-dirty ng-valid-parse" style="background-image:none;">
              <option label="Regular" value="string:regular" selected="selected">Item 1</option>
              <option label="Priority" value="string:priority">Item 2</option>
            </select>
          </div>
          <div class="item right-align width-40 width-40-mobile"><span>$1,000,000.00</span></div>
        </div>
        <div class="group inline mt-5">
          <div class="item inline width-100 flex-between"><span class="f-12">Hello World</span><a class="f-12">Make changes</a></div>
        </div>
      </xmp>
    </div>
    <div class="modal-body group">
      <div class="col-md setting-result">
        <label class="em-400 type-h5 colon" translate="RECEIVE_BY">Receive by</label>
        <br>
        <div class="flex-column flex-end display-inline-block mbl"><label class="flex-between flex-center">
          <input type="checkbox" class="ng-valid ng-not-empty ng-dirty ng-valid-parse ng-touched" checked="checked" style="">
          <span class="mlm" translate="EMAIL" uib-tooltip="Verify your email address to enable notifications" tooltip-enable="!user.isEmailVerified" tooltip-placement="left">Email</span>
        </div>
        <label class="flex-between flex-center">
          <input type="checkbox" class="ng-valid ng-not-empty ng-dirty ng-valid-parse ng-touched" checked="checked" style="">
          <span class="mlm" translate="SMS" uib-tooltip="Verify your mobile number to enable notifications" tooltip-enable="!user.isMobileVerified" tooltip-placement="left">SMS</span>
        </label>
      </div>
    </div>
    <div class="code">
      <xmp>
        <div class="col-md setting-result">
          <label class="em-400 type-h5 colon" translate="RECEIVE_BY">Receive by</label>
          <br>
          <div class="flex-column flex-end display-inline-block mbl"><label class="flex-between flex-center">
            <input type="checkbox" class="ng-valid ng-not-empty ng-dirty ng-valid-parse ng-touched" checked="checked" style="">
            <span class="mlm" translate="EMAIL" uib-tooltip="Verify your email address to enable notifications" tooltip-enable="!user.isEmailVerified" tooltip-placement="left">Email</span>
          </label>
          <label class="flex-between flex-center">
            <input type="checkbox" class="ng-valid ng-not-empty ng-dirty ng-valid-parse ng-touched" checked="checked" style="">
            <span class="mlm" translate="SMS" uib-tooltip="Verify your mobile number to enable notifications" tooltip-enable="!user.isMobileVerified" tooltip-placement="left">SMS</span>
          </label>
        </div>
      </xmp>
    </div>
    <div class="modal-body group">
      <div class="flex-column" style="align-items:left;">
        <a class="uib-dropdown-toggle dropdown-toggle ptn" data-toggle="uib-dropdown" role="button" aria-expanded="false" uib-dropdown-toggle="" aria-haspopup="true"><span translate="EXPLORE">Explore</span><i class="ti-angle-down mlm"></i></a>
        <ul class="uib-dropdown-menu dropdown-menu" role="menu" style="position:relative;display:block;max-width:300px;top:0px;">
          <li><a translate="HOME" target="_blank" rel="noopener noreferrer">Home</a></li>
          <li><a translate="CHARTS" target="_blank" rel="noopener noreferrer">Charts</a></li>
          <li><a translate="STATS" target="_blank" rel="noopener noreferrer">Stats</a></li>
          <li><a translate="MARKETS" target="_blank" rel="noopener noreferrer">Markets</a></li>
          <li><a translate="API" target="_blank" rel="noopener noreferrer">API</a></li>
        </ul>
      </div>
    </div>
    <div class="code">
      <xmp>
        <div class="flex-column" style="align-items:left;">
          <a class="uib-dropdown-toggle dropdown-toggle ptn" data-toggle="uib-dropdown" role="button" aria-expanded="false" uib-dropdown-toggle="" aria-haspopup="true"><span translate="EXPLORE">Explore</span><i class="ti-angle-down mlm"></i></a>
          <ul class="uib-dropdown-menu dropdown-menu" role="menu" style="position:relative;display:block;max-width:300px;top:0px;">
            <li><a translate="HOME" target="_blank" rel="noopener noreferrer">Home</a></li>
            <li><a translate="CHARTS" target="_blank" rel="noopener noreferrer">Charts</a></li>
            <li><a translate="STATS" target="_blank" rel="noopener noreferrer">Stats</a></li>
            <li><a translate="MARKETS" target="_blank" rel="noopener noreferrer">Markets</a></li>
            <li><a translate="API" target="_blank" rel="noopener noreferrer">API</a></li>
          </ul>
        </div>
      </xmp>
    </div>
    <div class="modal-body group">
      <div class="btn-group">
        <button type="button" class="btn button-default button-short-wide type-h5 pos-rel"><i class="mrs media-middle icon-receive"></i><span class="em-300">Request</span></button><button class="btn button-default button-short type-h5" type="button" uib-tooltip="Copy a receive address to your clipboard." tooltip-append-to-body="true" tooltip-placement="top"><i class="mhs ti-clipboard" style=""></i></button>
      </div>
    </div>
    <div class="code">
      <xmp>
        <div class="btn-group">
          <button type="button" class="btn button-default button-short-wide type-h5 pos-rel"><i class="mrs media-middle icon-receive"></i><span class="em-300">Request</span></button><button class="btn button-default button-short type-h5" type="button" uib-tooltip="Copy a receive address to your clipboard." tooltip-append-to-body="true" tooltip-placement="top"><i class="mhs ti-clipboard" style=""></i></button>
        </div>
      </xmp>
    </div>
    <div class="modal-body group">
      <div class="group inline mt-20 block-mobile pbm">
        <div class="item width-75 width-100-tablet width-100-mobile search">
          <input type="text" id="home-search" placeholder="Address / ip / SHA hash" name="search">
          <input type="hidden" name="searchbar" value="homepage">
          <i class="icon-search"></i>
        </div>
        <div class="item width-25 width-30-mobile margin-0-auto">
          <button type="button" value="Search" id="search_button" class="button-primary">Search</button>
        </div>
      </div>
    </div>
    <div class="code">
      <xmp>
        <div class="group inline mt-20 block-mobile pbm">
          <div class="item width-75 width-100-tablet width-100-mobile search">
            <input type="text" id="home-search" placeholder="Address / ip / SHA hash" name="search">
            <input type="hidden" name="searchbar" value="homepage">
            <i class="icon-search"></i>
          </div>
          <div class="item width-25 width-30-mobile margin-0-auto">
            <button type="button" value="Search" id="search_button" class="button-primary">Search</button>
          </div>
        </div>
      </xmp>
    </div>
    <div class="flex-center flex-between-mobile mbm ptm">
      <label class="type-h5 em-400 mbn" translate="REMEMBER_2FA">Option</label><span class="label label-success mlm" style="height: 16px;padding-top:4px;">Enabled</span>
    </div>
    <div class="code">
      <xmp>
        <div class="flex-center flex-between-mobile mbm ptm">
          <label class="type-h5 em-400 mbn" translate="REMEMBER_2FA">Option</label><span class="label label-success mlm" style="height: 16px;padding-top:4px;">Enabled</span>
        </div>
      </xmp>
    </div>
    <div class="flex-end flex-center pv-10">
      <button type="button" class="button-muted mrm">Cancel</button>
      <button type="button" class="button-primary">Submit</button>
    </div>
    <div class="code">
      <xmp>
        <div class="flex-end flex-center">
          <button type="button" class="button-muted mrm">Cancel</button>
          <button type="button" class="button-primary">Submit</button>
        </div>
      </xmp>
    </div>
    <div class="modal-body">
      <div class="dyk" data-preflight-tag="DidYouKnow">
        <div class="flex-between flex-center mbl">
          <h5 class="mvn type-h5 em-400" translate="DYK">Did You Know?</h5>
          <div class="hashtag em-400 upper flex-center educational" ng-class="dyk.type.toLowerCase()"> Educational</div>
        </div>
        <div class="widget">
          <div class="flex-center mbm">
            <i class="title border-grey ti-check" ng-class="dyk.icon"></i>
            <p class="h3 em-300 mll blue educational" ng-class="dyk.type.toLowerCase()">Privacy benefits of HD addresses</p>
          </div>
          <p class="alt-font f-16 em-300">
            If you use the same address each time you receive funds, it becomes easy for anyone to track your entire payment history. So we create a new bitcoin address for every transaction to give you more privacy.<!---->
          </p>
        </div>
      </div>
    </div>
    <div class="code">
      <xmp>
        <div class="dyk" data-preflight-tag="DidYouKnow">
          <div class="flex-between flex-center mbl">
            <h5 class="mvn type-h5 em-400">Did You Know?</h5>
            <div class="hashtag em-400 upper flex-center educational"> Educational</div>
          </div>
          <div class="widget">
            <div class="flex-center mbm">
              <i class="title border-grey ti-check"></i>
              <p class="h3 em-300 mll blue educational">Privacy benefits of HD addresses</p>
            </div>
            <p class="alt-font f-16 em-300">
              If you use the same address each time you receive funds, it becomes easy for anyone to track your entire payment history. So we create a new bitcoin address for every transaction to give you more privacy.<!---->
            </p>
          </div>
        </div>
      </xmp>
    </div>
  </form>
</div>
