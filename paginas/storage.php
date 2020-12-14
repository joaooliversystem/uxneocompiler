<form>
    <select class="compiler-select w-seta selectclass">
        <option>SELECT COMPILER</option>
    </select>

    <select class="compiler-select w-seta selectclass">
        <option>SELECT EXAMPLE</option>
    </select>
</form>


<div class="errors-warnings">


    <div class="display-erros n-padding deploy-bg" style="height: 410px;">
        <h4 class="gree-title">Read storage from a Smart Contract</h4>
        <div class="container">
            <div class="row">

                <div class="container">
                <form id="formgetstorage" method="post" class="ng-pristine ng-valid">
                    <label for="gsf_contracthash">ScriptHash</label>
                    <input id="gsf_contracthash" class="form-control" placeholder="Contract Hash">
                    <label for="getStorageFormat">Input Key</label>
                    <div class="row">
                        <div class="col-md-6">
                            <input id="gsf_contractkey" class="form-control" placeholder="Storage Key">
                        </div>
                        <div class="col-md-6">
                            <select name="getStorageFormat" id="getStorageFormat" class="custom-select form-control">
                                <option title="gsf_string" selected="" value="String (no quotes)">String (no quotes)</option>
                                <option title="gsf_hex" value="Hex">Hex</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" id="gsfsubmit" style="margin-bottom: 10px; margin-top: 10px;" class="btn btn-info" data-toggle="modal"><i class="fas fa-hdd"></i></button>
                        </div>
                    </div>
                    <label for="gsf_contractvalue">Output Value</label>
                    <div class="row">
                        <div class="col-md-6">
                            <input id="gsf_contractvaluehex" class="form-control mt-4" placeholder="Storage Value (Hex)" style="border-bottom: 5px solid #0aab7b;" >
                        </div>
                        <div class="col-md-6">
                            <input id="gsf_contractvaluestr" class="form-control mt-4" placeholder="Storage Value (String)" style="border-bottom: 5px solid #0aab7b;" >
                        </div>
                        <div class="col-md-6">
                            <input id="gsf_contractvalueint" class="form-control mt-4" placeholder="Storage Value (BigInteger)" style="border-bottom: 5px solid #0aab7b;" >
                        </div>
                    </div>
                </form>

                </div>
            </div>
            </div>
            </div>



    <div class="display-erros n-padding deploy-bg" style="height: 310px;">
        <h4 class="gree-title">NEP5 Balance</h4>
        <div class="container">
            <div class="row">
            <div class="container">
                <form id="getnep5balance" action="" class="ng-pristine ng-valid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="getnep5_contract">Contract (scripthash)</label>
                                <input id="getnep5_contract" class="form-control" placeholder="Contract" required="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="getnep5_address">Address (base58)</label>
                                <input id="getnep5_address" class="form-control" placeholder="Address" required="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" style="margin-bottom: 10px;" id="txgetnep5balance" class="btn btn-info"><i class="fas fa-phone"></i></button>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="output_getnep5">Output</label>
                                <input id="output_getnep5" class="form-control" placeholder="NEP5 balance"  required="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="output_getnep5_extra">Address (base58) + Height</label>
                                <input id="output_getnep5_extra" class="form-control" placeholder="NEP5 extra info"  required="">
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            </div>
            </div>
            </div>



    <div class="display-erros n-padding deploy-bg" style="height: 460px;">
        <h4 class="gree-title">Incremental storage <button type="submit" onclick="getIncrementalStorageInfo()" class="btn btn-info btn-sm"><i class="fas fa-sync-alt"></i></button>
        <br>

            <input id="heightForIncStorage" class="form-control" value="0" placeholder="0" oninput="getIncrementalStorageInfo()" style="border-bottom: 2px solid white;">
        </h4>
        <div class="container">
            <div class="row">
                <div class="container">
                    <div class="col-md-12">
                        <textarea id="textAreaOfIncrementalStorage" readonly="readonly" style="font-size: 15px;" rows="15" cols="100" placeholder="Incremental storage for any height..." class="form-control"></textarea><br>
                    </div>
            </div>
            </div>
            </div>
    </div>

</div>