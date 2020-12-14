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
        <h4 class="gree-title">Create TX: Transfer UTXO Assets <br><button type="button" onclick="goToWalletCentral()" id="btn_register_new_address" class="btn btn-warning text-white btn-sm mt-1">Register new address</button></h4>
        <div class="container">
            <div class="row">

                <div class="container">
                <form id="createtx" action="" class="ng-pristine ng-valid mt-2">
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="createtx_from">From(Address)</label>
                                <button type="button" onclick="createGasTxForm()" id="txclaimgas" class="btn btn-info btn-sm">Claim</button>
                               <br> <br>
                                <select name="createtx_from" id="createtx_from" class="custom-select form-control" size="3"><option value="wallet_0">AK2nJJpJr6o664CWJKi1QRXjqeic2zRp8y</option><option value="wallet_1">APLJBPhtRg2XLhtpxEHd6aRNL7YSLGH2ZL</option><option value="wallet_2">AXxCjds5Fxy7VSrriDMbCrSRTxpRdvmLtx</option><option value="wallet_3">AQaJZTKshTQzcCKmsaoNVrtSP1pEB3Utn9</option><option value="wallet_4">AKkkumHbBipZ46UMZJoFynJMXzSRnBvKcs</option><option value="wallet_5">AWLYWXB8C9Lt1nHdDZJnC5cpYJjgRDLk17</option><option value="wallet_6">AR3uEnLUdfm1tPMJmiJQurAXGL7h3EXQ2F</option><option value="wallet_7">AJmjUqf1jDenxYpuNS4i2NxD9FQYieDpBF</option><option value="wallet_8">AZ81H31DMWzbSnFDLFkzh9vHwaDLayV7fU</option><option value="wallet_9">Encrypted: 6PYMLN5gxjEJ1u4zoTADWM2gphfXRszFKi4QCq6FjwumwPWsf1LoZpvFxU</option></select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="createtx_to">To(Address)</label><br> <br>
                                <select name="createtx_to" id="createtx_to" class="custom-select form-control" size="3"><option value="wallet_0">AK2nJJpJr6o664CWJKi1QRXjqeic2zRp8y</option><option value="wallet_1">APLJBPhtRg2XLhtpxEHd6aRNL7YSLGH2ZL</option><option value="wallet_2">AXxCjds5Fxy7VSrriDMbCrSRTxpRdvmLtx</option><option value="wallet_3">AQaJZTKshTQzcCKmsaoNVrtSP1pEB3Utn9</option><option value="wallet_4">AKkkumHbBipZ46UMZJoFynJMXzSRnBvKcs</option><option value="wallet_5">AWLYWXB8C9Lt1nHdDZJnC5cpYJjgRDLk17</option><option value="wallet_6">AR3uEnLUdfm1tPMJmiJQurAXGL7h3EXQ2F</option><option value="wallet_7">AJmjUqf1jDenxYpuNS4i2NxD9FQYieDpBF</option><option value="wallet_8">AZ81H31DMWzbSnFDLFkzh9vHwaDLayV7fU</option><option value="wallet_9">Encrypted: 6PYMLN5gxjEJ1u4zoTADWM2gphfXRszFKi4QCq6FjwumwPWsf1LoZpvFxU</option></select>
                                <!-- <input name="createtx_to" id="createtx_to" placeholder="Destination Address" size="40"></input>-->
                            </div>
                        </div>
                    </div>
                    <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <button type="button" onclick="fillAllNeo()" id="txcreatesendallneo" class="btn btn-info btn-sm">All Neo</button>
                                    <br><br><input type="number" id="createtx_NEO" value="0" class="form-control" placeholder="NEO" required="">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <button type="button" onclick="fillAllGas()" id="txcreatesendallgas" class="btn btn-info btn-sm">All Gas</button>
                                    <br> <br> <input type="number" id="createtx_GAS" value="0" class="form-control" placeholder="GAS" required="">
                                </div>
                            </div>
                        </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <button type="button" onclick="createSendTxForm()" id="txcreate" class="btn btn-info btn-sm"><i class="fas fa-envelope-open"></i> Send</button>
                            </div>
                        </div>
                    </div>
                </form>


            </div>
            </div>
            </div>
            </div>




    <div class="display-erros n-padding deploy-bg" style="height: 810px;">
        <h4 class="gree-title">Create TX: Withdraw UTXO Assets from Contract
        </h4>
        <div class="container">
            <div class="row">

<div class="container">
                <form id="frm_createtx_withdraw" action="" class="ng-pristine ng-valid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="createtx_from_contract">From: Verification Script in hex</label>
                                <textarea id="createtx_from_contract" class="form-control" style="width: 100%;background: none; border:none; border-bottom: 5px solid #00AF92; resize: none;  outline: none; color: white;" placeholder="From Contract Hex Script"></textarea>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="createtx_from_scripthash">Scripthash big-endian (readonly)</label>
                                        <input id="createtx_from_scripthash" class="form-control" placeholder="scripthash" required="" readonly="">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="createtx_from_address">Address (readonly)</label>
                                        <input id="createtx_from_address" class="form-control" placeholder="address" required="" readonly="">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <button type="button" onclick="addContractToWalletFromVerification()" id="btnNewVerificationContractToWallet" class="btn btn-success btn-sm"><i class="fas fa-user-plus"></i> Add to wallet</button>
                                    </div>
                                </div>
                                <label for="createtx_from_verification">Invocation in hex</label>
                                <textarea id="createtx_from_verification" class="form-control"  style="width: 100%;background: none; border:none; border-bottom: 5px solid #00AF92; resize: none;  outline: none; color: white;" placeholder="Verification/Withdraw Hex Script" required=""></textarea>
                                <label for="createtx_from_verification_opcodes">Invocation script opcodes (readonly)</label>
                                <textarea id="createtx_from_verification_opcodes" class="form-control"  style="width: 100%;background: none; border:none; border-bottom: 5px solid #00AF92; resize: none;  outline: none; color: white;" placeholder="Verification/Withdraw Hex Script Opcodes" readonly=""></textarea>
                                <label for="createtx_script_attributes">Script Attributes</label>
                                <textarea id="createtx_script_attributes" class="form-control" placeholder="Script Attributes, one per line"  style="width: 100%;background: none; border:none; border-bottom: 5px solid #00AF92; resize: none;  outline: none; color: white;"></textarea>
                                <label for="createtx_attributes">Attributes: 20 Script big-end (20B), 30 Vote, (32B), f0-ff remarks (variable), a1-af hashes (32B)</label>
                                <textarea id="createtx_attributes" class="form-control" placeholder="Attributes, one per line"  style="width: 100%;background: none; border:none; border-bottom: 5px solid #00AF92; resize: none;  outline: none; color: white;"></textarea>
                            </div>


                        </div>

                        <div class="col-md-6">

                            <div class="form-group">
                                <select id="createtx_input_assetid" onchange="verifyRPCNetworkForWithdrawUTXO();" required="">
                                    <option value="Select an asset">Select an asset</option>
                                    <option value="c56f33fc6ecfcd0c225c4ab356fee59390af8560be0e930faebe74a6daff7c9b">NEO</option>
                                    <option value="602c79718b16e442de58778e148d0b1084e3b2dffd5de6b7b16cee7969282de7">GAS</option>
                                </select><br>
                                <label for="createtx_input_utxo2">Input UTXO</label><br>
                                <select id="createtx_input_utxo2" name="createtx_input_utxo2" required="" multiple=""></select>
                            </div>

                            <div class="form-group">
                                <input type="checkbox" id="createtx_cbx_change" checked="">Add change automatically<br>
                                <label id="createtx_output_total">Total: 0 NEO (expected 0)</label><br>
                                <label for="createtx_signature">Generate Signature (Optional)</label>
                                <input id="createtx_signature" class="form-control" placeholder="Private Key (32 bytes)" pattern=".{0}|.{64,64}" title="Must be 32 bytes hex string (or empty)">
                                <!-- document.getElementById("createtx_signature").checkValidity() -->
                                <button type="button" id="createtx_create_sign" class="btn btn-info btn-sm mt-1" onclick="createtx_sign();"><i class="fas fa-file-signature"></i> Sign</button>
                                <!-- Neon.wallet.generateSignature -->
                                <!-- https://github.com/CityOfZion/neon-js/blob/cf5f92e4124c45a154449bf5852bcab28ddc1b32/src/wallet/core.js#L126 -->
                            </div>



                                <div class="form-group">
                                    <label for="createtx_output_addresses">Output/To Address (One per line)</label>
                                    <textarea id="createtx_output_addresses"  style="width: 100%;background: none; border:none; border-bottom: 5px solid #00AF92; resize: none;  outline: none; color: white;" class="form-control" placeholder="Address1 \n Address2 \n OriginalAddress (For Change)"></textarea>
                                    <label for="createtx_output_addresses">Output/To Values (One per line)</label>
                                    <textarea id="createtx_output_values" class="form-control"  style="width: 100%;background: none; border:none; border-bottom: 5px solid #00AF92; resize: none;  outline: none; color: white;" placeholder="1 \n 5 \n 3"></textarea>
                                </div>
                            </div>

                        <div class="col-md-12">
                            <label for="createtx_txhex">Transaction Header/Message Hash</label>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" placeholder="transaction hash (big endian UInt256/32 bytes)" id="createtx_txhash" size="50"><br>
                            <textarea id="createtx_txhex"  style="width: 100%;background: none; border:none; border-bottom: 5px solid #00AF92; resize: none;  outline: none; color: white;" class="form-control" placeholder="transaction hex"></textarea>
                        </div>
                        <div class="col-md-12 mt-3">
                            <button id="txcreate_withdraw" type="button" class="btn btn-info btn-sm" onclick="create_withdrawtx();">Create Withdraw Transaction</button>
                            <button type="submit" id="txcreatesubmit_withdraw" class="btn btn-info btn-sm">Submit Withdraw Transaction</button>
                        </div>
                        </div>


                </form>
</div>
            </div>
            </div>
    </div>



 </div>