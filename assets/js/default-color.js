jQuery(document).ready( function($) {
    acf.add_filter( 'color_picker_args', function( args, $field ){
	
        /**
         * :root {
            --color-brand: #0E6B70;
            --color-secondary: #B2CC44;
            --color-border-color: #F6CD19;
            --color-black: #000;
            --color-text: #000;
            --color-text-grey: #6C6C6C;
            --color-white: #fff;
            --color-grey: #f8f8f8;
        }
         */
        args.palettes = ['#0E6B70', '#B2CC44', '#F6CD19', '#6C6C6C', '#f8f8f8']
        
        // return
        return args;
                
    });
});