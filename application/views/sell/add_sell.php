<!-- Page Container START -->
<div class="page-container">

    <!-- Content Wrapper START -->
    <div class="main-content">
        <form>
            <div class="page-header no-gutters has-tab">
                <div class="d-md-flex m-b-15 align-items-center justify-content-between">
                    <div class="media align-items-center m-b-15">
                        <div class="avatar avatar-image rounded" style="height: 70px; width: 70px">
                            <img src="<?php echo base_url() ?>assets/images/netflix.png" alt="">
                        </div>
                        <div class="m-l-15">
                            <h4 class="m-b-0">Akun Netflix</h4>
                            <p class="text-muted m-b-0">Netflix</p>
                        </div>
                    </div>
                    <div class="m-b-15">
                        <button class="btn btn-primary">
                            <i class="anticon anticon-save"></i>
                            <span>Save</span>
                        </button>
                    </div>
                </div>
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#product-edit-basic">Basic Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#product-edit-option">Option Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#product-edit-description">Description</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content m-t-15">
                <div class="tab-pane fade show active" id="product-edit-basic">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="font-weight-semibold" for="productName">Product Name</label>
                                <input type="text" class="form-control" id="productName" placeholder="Product Name" value="Skinny Men Blazer">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-semibold" for="productPrice">Price</label>
                                <input type="text" class="form-control" id="productPrice" placeholder="Price" value="$ 199">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-semibold" for="productCategory">Category</label>
                                <select class="custom-select" id="productCategory">
                                    <option value="cloths" selected="">Cloths</option>
                                    <option value="homeDecoration">Home Decoration</option>
                                    <option value="eletronic">Eletronic</option>
                                    <option value="jewellery">Jewellery</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-semibold" for="productBrand">Brand</label>
                                <input type="text" class="form-control" id="productBrand" placeholder="Brand" value="H&amp;M">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-semibold" for="productStatus">Status</label>
                                <select class="custom-select" id="productStatus">
                                    <option value="inStock" selected="">In Stock</option>
                                    <option value="outOfStock">Out of Stock</option>
                                    <option value="pending">Pending</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="product-edit-option">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="font-weight-semibold" for="productSize">Size</label>
                                <div class="select2-container select2-container-multi select2" id="s2id_productSize">
                                    <ul class="select2-choices">
                                        <li class="select2-search-choice">
                                            <div>40</div> <a href="#" class="select2-search-choice-close" tabindex="-1"></a>
                                        </li>
                                        <li class="select2-search-choice">
                                            <div>42</div> <a href="#" class="select2-search-choice-close" tabindex="-1"></a>
                                        </li>
                                        <li class="select2-search-field"> <label for="s2id_autogen1" class="select2-offscreen">Size</label> <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" id="s2id_autogen1" placeholder="" style="width: 20px;"> </li>
                                    </ul>
                                    <div class="select2-drop select2-drop-multi select2-display-none">
                                        <ul class="select2-results">
                                            <li class="select2-no-results">No matches found</li>
                                        </ul>
                                    </div>
                                </div><select class="select2" id="productSize" multiple="multiple" tabindex="-1" style="display: none;">
                                    <option value="40" selected="">40</option>
                                    <option value="42" selected="">42</option>
                                    <option value="44">44</option>
                                    <option value="46">46</option>
                                    <option value="48">48</option>
                                    <option value="50">50</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-semibold" for="productColors">Colors</label>
                                <div class="select2-container select2-container-multi select2" id="s2id_productColors">
                                    <ul class="select2-choices">
                                        <li class="select2-search-choice">
                                            <div>Dark Blue</div> <a href="#" class="select2-search-choice-close" tabindex="-1"></a>
                                        </li>
                                        <li class="select2-search-choice">
                                            <div>Gray</div> <a href="#" class="select2-search-choice-close" tabindex="-1"></a>
                                        </li>
                                        <li class="select2-search-choice">
                                            <div>Gray Blue</div> <a href="#" class="select2-search-choice-close" tabindex="-1"></a>
                                        </li>
                                        <li class="select2-search-field"> <label for="s2id_autogen2" class="select2-offscreen">Colors</label> <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" id="s2id_autogen2" placeholder="" style="width: 20px;"> </li>
                                    </ul>
                                    <div class="select2-drop select2-drop-multi select2-display-none">
                                        <ul class="select2-results">
                                            <li class="select2-no-results">No matches found</li>
                                        </ul>
                                    </div>
                                </div><select class="select2" id="productColors" multiple="multiple" tabindex="-1" style="display: none;">
                                    <option value="db" selected="">Dark Blue</option>
                                    <option value="g" selected="">Gray</option>
                                    <option value="gb" selected="">Gray Blue</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-semibold" for="productFit">Fit</label>
                                <select class="custom-select" id="productFit">
                                    <option value="skinny" selected="">Skinny</option>
                                    <option value="slim">Slim</option>
                                    <option value="regular">Regular</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-semibold" for="productMaterial">Material</label>
                                <div class="select2-container select2-container-multi select2" id="s2id_productMaterial">
                                    <ul class="select2-choices">
                                        <li class="select2-search-choice">
                                            <div>Polyester</div> <a href="#" class="select2-search-choice-close" tabindex="-1"></a>
                                        </li>
                                        <li class="select2-search-field"> <label for="s2id_autogen3" class="select2-offscreen">Material</label> <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" id="s2id_autogen3" placeholder="" style="width: 20px;"> </li>
                                    </ul>
                                    <div class="select2-drop select2-drop-multi select2-display-none">
                                        <ul class="select2-results">
                                            <li class="select2-no-results">No matches found</li>
                                        </ul>
                                    </div>
                                </div><select class="select2" id="productMaterial" multiple="multiple" tabindex="-1" style="display: none;">
                                    <option value="polyester" selected="">Polyester</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-semibold" for="productShip">Ship From</label>
                                <select class="custom-select" id="productShip">
                                    <option value="columbia" selected="">Columbia</option>
                                    <option value="brazil">Brazil</option>
                                    <option value="chile">Chile</option>
                                    <option value="argentina">Argentina</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="product-edit-description">
                    <div class="card">
                        <div class="card-body">
                            <div class="ql-toolbar ql-snow"><span class="ql-formats"><span class="ql-header ql-picker"><span class="ql-picker-label" tabindex="0" role="button" aria-expanded="false" aria-controls="ql-picker-options-0"><svg viewBox="0 0 18 18">
                                                <polygon class="ql-stroke" points="7 11 9 13 11 11 7 11"></polygon>
                                                <polygon class="ql-stroke" points="7 7 9 5 11 7 7 7"></polygon>
                                            </svg></span><span class="ql-picker-options" aria-hidden="true" tabindex="-1" id="ql-picker-options-0"><span tabindex="0" role="button" class="ql-picker-item" data-value="1"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="2"></span><span tabindex="0" role="button" class="ql-picker-item" data-value="3"></span><span tabindex="0" role="button" class="ql-picker-item"></span></span></span><select class="ql-header" style="display: none;">
                                        <option value="1"></option>
                                        <option value="2"></option>
                                        <option value="3"></option>
                                        <option selected="selected"></option>
                                    </select></span><span class="ql-formats"><button type="button" class="ql-bold"><svg viewBox="0 0 18 18">
                                            <path class="ql-stroke" d="M5,4H9.5A2.5,2.5,0,0,1,12,6.5v0A2.5,2.5,0,0,1,9.5,9H5A0,0,0,0,1,5,9V4A0,0,0,0,1,5,4Z"></path>
                                            <path class="ql-stroke" d="M5,9h5.5A2.5,2.5,0,0,1,13,11.5v0A2.5,2.5,0,0,1,10.5,14H5a0,0,0,0,1,0,0V9A0,0,0,0,1,5,9Z"></path>
                                        </svg></button><button type="button" class="ql-italic"><svg viewBox="0 0 18 18">
                                            <line class="ql-stroke" x1="7" x2="13" y1="4" y2="4"></line>
                                            <line class="ql-stroke" x1="5" x2="11" y1="14" y2="14"></line>
                                            <line class="ql-stroke" x1="8" x2="10" y1="14" y2="4"></line>
                                        </svg></button><button type="button" class="ql-underline"><svg viewBox="0 0 18 18">
                                            <path class="ql-stroke" d="M5,3V9a4.012,4.012,0,0,0,4,4H9a4.012,4.012,0,0,0,4-4V3"></path>
                                            <rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="12" x="3" y="15"></rect>
                                        </svg></button><button type="button" class="ql-link"><svg viewBox="0 0 18 18">
                                            <line class="ql-stroke" x1="7" x2="11" y1="7" y2="11"></line>
                                            <path class="ql-even ql-stroke" d="M8.9,4.577a3.476,3.476,0,0,1,.36,4.679A3.476,3.476,0,0,1,4.577,8.9C3.185,7.5,2.035,6.4,4.217,4.217S7.5,3.185,8.9,4.577Z"></path>
                                            <path class="ql-even ql-stroke" d="M13.423,9.1a3.476,3.476,0,0,0-4.679-.36,3.476,3.476,0,0,0,.36,4.679c1.392,1.392,2.5,2.542,4.679.36S14.815,10.5,13.423,9.1Z"></path>
                                        </svg></button></span><span class="ql-formats"><button type="button" class="ql-list" value="ordered"><svg viewBox="0 0 18 18">
                                            <line class="ql-stroke" x1="7" x2="15" y1="4" y2="4"></line>
                                            <line class="ql-stroke" x1="7" x2="15" y1="9" y2="9"></line>
                                            <line class="ql-stroke" x1="7" x2="15" y1="14" y2="14"></line>
                                            <line class="ql-stroke ql-thin" x1="2.5" x2="4.5" y1="5.5" y2="5.5"></line>
                                            <path class="ql-fill" d="M3.5,6A0.5,0.5,0,0,1,3,5.5V3.085l-0.276.138A0.5,0.5,0,0,1,2.053,3c-0.124-.247-0.023-0.324.224-0.447l1-.5A0.5,0.5,0,0,1,4,2.5v3A0.5,0.5,0,0,1,3.5,6Z"></path>
                                            <path class="ql-stroke ql-thin" d="M4.5,10.5h-2c0-.234,1.85-1.076,1.85-2.234A0.959,0.959,0,0,0,2.5,8.156"></path>
                                            <path class="ql-stroke ql-thin" d="M2.5,14.846a0.959,0.959,0,0,0,1.85-.109A0.7,0.7,0,0,0,3.75,14a0.688,0.688,0,0,0,.6-0.736,0.959,0.959,0,0,0-1.85-.109"></path>
                                        </svg></button><button type="button" class="ql-list" value="bullet"><svg viewBox="0 0 18 18">
                                            <line class="ql-stroke" x1="6" x2="15" y1="4" y2="4"></line>
                                            <line class="ql-stroke" x1="6" x2="15" y1="9" y2="9"></line>
                                            <line class="ql-stroke" x1="6" x2="15" y1="14" y2="14"></line>
                                            <line class="ql-stroke" x1="3" x2="3" y1="4" y2="4"></line>
                                            <line class="ql-stroke" x1="3" x2="3" y1="9" y2="9"></line>
                                            <line class="ql-stroke" x1="3" x2="3" y1="14" y2="14"></line>
                                        </svg></button></span><span class="ql-formats"><button type="button" class="ql-clean"><svg class="" viewBox="0 0 18 18">
                                            <line class="ql-stroke" x1="5" x2="13" y1="3" y2="3"></line>
                                            <line class="ql-stroke" x1="6" x2="9.35" y1="12" y2="3"></line>
                                            <line class="ql-stroke" x1="11" x2="15" y1="11" y2="15"></line>
                                            <line class="ql-stroke" x1="15" x2="11" y1="11" y2="15"></line>
                                            <rect class="ql-fill" height="1" rx="0.5" ry="0.5" width="7" x="2" y="14"></rect>
                                        </svg></button></span></div>
                            <div id="productDescription" class="ql-container ql-snow">
                                <div class="ql-editor" data-gramm="false" contenteditable="true">
                                    <p>Special cloth alert. The key to more success is to have a lot of pillows. Surround yourself with angels, positive energy, beautiful people, beautiful souls, clean heart, angel. They will try to close the door on you, just open it. A major key, never panic. Don’t panic, when it gets crazy and rough, don’t panic, stay calm. They key is to have every key, the key to open every door.The other day the grass was brown, now it’s green because I ain’t give up. Never surrender. Lion! I’m up to something. Always remember in the jungle there’s a lot of they in there, after you overcome they, you will make it to paradise.</p>
                                </div>
                                <div class="ql-clipboard" contenteditable="true" tabindex="-1"></div>
                                <div class="ql-tooltip ql-hidden"><a class="ql-preview" target="_blank" href="about:blank"></a><input type="text" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL"><a class="ql-action"></a><a class="ql-remove"></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- Content Wrapper END -->