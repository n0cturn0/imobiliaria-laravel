

    {{-- <div class="col-md-12 bg-info">
        <h2 class="text-center">Laravel-9 Ajax Product Filter With Price Range Slider</h2>
    </div> --}}
    <div class="col-md-12">
        <div class="middle">
            <div id="multi_range">
                Valor entre: <span id="left_value">  0</span><span> e </span><span id="right_value">100000</span>
            </div><br>
            <div class="multi-range-slider">
                <input type="range" id="input_left" class="range_slider" min="0" max="1000000" value="250000" onmousemove="left_slider(this.value)">
                <input type="range" id="input_right" class="range_slider" min="0" max="1000000" value="750000" onmousemove="right_slider(this.value)">
                <div class="slider">
                    <div class="track"></div>
                    <div class="range"></div>
                    <div class="thumb left"></div>
                    <div class="thumb right"></div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="col-md-5 mt-4 pt-2">
        <div class="middle">
            <div class="multi-range-slider my-2">
                <select name="sort_by" id="sort_by" class="form-control">
                    <option value="">Sort By</option>
                    <option value="highest_price">Highest Price</option>
                    <option value="lowest_price">Lowest Price</option>
                </select>
            </div>
        </div>
    </div> --}}
{{-- </div> --}}
