scms.create('RawProductItemViewBridge', function(parent) {
    return {
        mainProductImage: null,
        attachEvents:function() {
            parent.attachEvents.call(this);
            this.mainProductImage = $(this.viewNode).find('.product-image-view');
        },
        changeHeadImage:function(src){
            this.mainProductImage.css('background-image', 'url(' + src + ')');
        }
    };
}, window.rhubarb.viewBridgeClasses.ProductItemViewBridge);