<!DOCTYPE html>
<html lang="it">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Flyer builder</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset("css/flyer_builder.css")}}" type="text/css" media="all">
</head>
<body>
<div class="container-fluid flyer-builder">
    <h1>Flyer Builder</h1>

    <div id="flyer_update_preview" class="row">
        <div class="col-sm-6 loc_form">

            <div class="form-group">
                <label for="flyer-images/" class="control-label">Image</label>
                <input id="flyer-image" type="file" tabindex="1">
            </div>

            <div class="row">
                <div class="col-sm-7">
                    <div class="form-group">
                        <label for="flyer-title" class="control-label">Title</label>
                        <input required="" class="form-control" id="flyer-title" placeholder="Main title"
                               value="Really incredible!!" maxlength="255" type="text" tabindex="2">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="flyer-title-size" class="control-label">Size (pt)</label>
                        <input required="" class="form-control" id="flyer-title-size" value="60" min="1" step="1"
                               type="number" tabindex="3" title="Title size: tune it to fit the available space">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="flyer-title-color" class="control-label">Color</label>
                        <input required="" class="form-control" id="flyer-title-color" value="#0080FF" type="color"
                               tabindex="4" title="Title color">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label" for="flyer-description">Description</label>
                <textarea class="form-control" id="flyer-description"
                          placeholder="Insert a short description taking care of the available space"
                          style="margin: 0px -11px 0px 0px; height: 122px; width: 665px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, nihil officia neque ad expedita consequatur quae! Voluptate, incidunt, earum, sit, eveniet harum ratione expedita quibusdam possimus sed laboriosam dolore ut recusandae eos. Ipsa, natus pariatur iste dolorum optio nostrum consectetur!</textarea>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="flyer-price" class="control-label">Price</label>
                        <input required="" class="form-control" id="flyer-price"
                               placeholder="Enter price (w/o decimals)" value="100" type="number" tabindex="5"
                               step="any" min="0">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="flyer-price-currency" class="control-label">Currency</label>
                        <select required="" class="form-control" id="flyer-price-currency" tabindex="6">
                            <option value="€">€</option>
                            <option value="$">$</option>
                            <option value="£">£</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="flyer-price-color" class="control-label">Color</label>
                        <input required="" class="form-control" id="flyer-price-color" value="#cc0000" type="color"
                               tabindex="8" title="Price color">
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <button id="flyer_preview_btn" type="button" class="btn btn-primary btn-block" tabindex="9">
                            Update preview
                        </button>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group text-right">
                        <button id="flyer_download_btn" type="button" class="btn btn-default btn-xs btn-block"
                                tabindex="10">Download
                        </button>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-sm-6">
            <iframe id="pdf_preview" type="application/pdf" src=""></iframe>
        </div>

    </div>
</div>

<script  src="{{asset("js/jquery.min.js")}}"></script>
<script type="text/javascript" src="{{asset("js/jspdf.debug.js")}}"></script>
<script type="text/javascript" src="{{asset("js/jquery.qrcode.min.js")}}"></script>
<script type="text/javascript" src="{{asset("js/flyer_builder.js")}}"></script>


<div id="viewPortSize"
     style="color: rgb(255, 255, 255); font-size: 12px; display: block; opacity: 0.0177213; background-color: rgb(0, 0, 0);"
     class="bottom_right">Inner: 808 x 565<br>Outer: 1366 x 698
</div>
</body>
</html>