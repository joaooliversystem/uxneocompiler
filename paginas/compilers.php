<form style="float: left;">
    <select class="compiler-select w-seta selectclass">
        <option disabled selected>SELECT COMPILER</option>
        <option>C#</option>
        <option>Python</option>
        <option>Golang</option>
        <option>Java</option>
    </select>

    <select class="compiler-select w-seta selectclass">
        <option disabled selected>SELECT EXAMPLE</option>
    </select>
</form>


<div class="version-compile">
    <span style="margin-right:15px;padding-top: 10px;float: left;">COMPILE VERSION:</span>
    <form style="float:right;margin-right: 15px;">
        <select class="compiler-select w-seta selectclass">
            <option>latest</option>
        </select>


    </form>

</div>


<br>
<div class="collapse container-colapse" id="collapseMore">

    <div class="">

        <div class="errors-warnings">
            <h4>AVM (in hex):
            </h4>


            <div class="display-erros" style="margin-bottom: 10px;">
                <textarea id="codeavm" name="codeavm" readonly="readonly" rows="5" cols="100" placeholder="AVM (in hex)" class="form-control" style="background: none;border: none;resize: none;outline: none;"></textarea>
            </div>
            <div class="dropdown show">
                <a class="btn btn-warning text-white dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    AVM
                </a>
                <button data-toggle="collapse" data-target="#opcodesDiv" type="button" class="btn btn-info collapsed">AVM OPCODES</button>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>

                &nbsp;&nbsp;&nbsp; <i class="fas fa-upload"></i>  AVM:
                <input type="file" class="dropzone" id="importAVMFile" accept=".avm,.AVM" onchange="ImportAVM()">
                <br>
                <br>
                <div class="collapse" id="opcodesDiv">


                    <div class="display-erros" style="margin-bottom: 10px;height: 150px">
                        <textarea id="txt_opcodes" readonly="readonly" rows="5" cols="100" placeholder="Listing AVM OpCodes" class="form-control" style="background: none;border: none;resize: none;outline: none;"></textarea>
                    </div>
                </div>
            </div>


        </div>



        <div class="errors-warnings" style="height: 520px;">
            <h4>Compiled contract info:
            </h4>
            <a href="#"  class="btn btn-info collapsed"> Add to wallet</a>
            <div class="clearfix"></div>
            <div class="display-erros" style="background: transparent">


            <label for="contractInfo_ScriptHash">ScriptHash</label>
            <input id="contractInfo_ScriptHash" readonly="readonly" name="contractInfo_ScriptHash" class="form-control" placeholder="Script Hash" style="width: 100%; margin-bottom: 10px;">

           <label for="contractInfo_ScriptHash">Address</label>
           <input id="contractInfo_Address" readonly="readonly" name="contractInfo_Address" class="form-control" placeholder="Address (base58)" style="width: 100%; margin-bottom: 10px;">


           <label for="contractInfo_ScriptHash">AVM size (in bytes)</label>
           <input id="contractInfo_AVMSize" readonly="readonly" name="contractInfo_AVMSize" class="form-control" placeholder="AVM size (in bytes)" style="width: 100%; margin-bottom: 10px;">


           <label for="contractInfo_ScriptHash">ABI:</label>
                <textarea id="codeabi" readonly="readonly" rows="5" cols="100" placeholder="ABI (JSON format)" class="form-control"></textarea>
            </div>


        </div>
    </div>
</div>

<div id="editor">  using Neo.SmartContract.Framework.Services.Neo;

    namespace Neo.SmartContract
    {
    public class HelloWorld : Framework.SmartContract
    {
    public static void Main()
    {
    // writes value "World" on storage key "Hello"
    // implicitly calls Storage.Put(Storage.CurrentContext, "Hello", "World")
    Storage.Put("Hello", "World");
    }
    }
    }
</div>

<a class="btn btn-default btn-compile">COMPILE</a>
<!--
<span class="opts-compilers">
          <label>
    <input type="checkbox"> Optimize opcodes with neo-avm-optimizer (BETA! USE WITH CAUTION!)
          </label>
</span>

<span class="opts-compilers">
        <label>
    <input type="checkbox" checked> Compatible
        </label>
    </span>
-->
<div class="errors-warnings">
    <h4>Compile Warning/Errors:</h4>


    <div class="display-erros">

    </div>

</div>

<a class="btn btn-default collapseMore" data-toggle="collapse" href="#collapseMore" role="button" aria-expanded="false" aria-controls="collapseMore">
   <img src="assets/SETALEFT.png" style="width: 40px;">
</a>

