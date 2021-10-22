/* global describe, it jsPDF, expect */
describe('Module: Context2D autoPaging', () => {
    it('context2d autoPaging: rect', () => {
        var doc = new jsPDF('p', 'pt', 'a4');
        var ctx = doc.context2d;
		doc.context2d.autoPaging = true;

        var writeArray = [];
        doc.__private__.setCustomOutputDestination(writeArray);
        ctx.strokeStyle="#FF0000";
        ctx.strokeRect(20,20,150,3000);
        ctx.strokeStyle="#000000";
        ctx.strokeRect(180,20,150,3000);

        expect(writeArray).toEqual(["1.00 0.00 0.00 RG","0.20 w","1.00 0.00 0.00 RG","0.00 0.00 0.00 rg","1.00 0.00 0.00 RG","0 J","1.00 w","0 j","0.20 w","1.00 0.00 0.00 RG","0.00 0.00 0.00 rg","1.00 0.00 0.00 RG","0 J","1.00 w","0 j","0.20 w","1.00 0.00 0.00 RG","0.00 0.00 0.00 rg","1.00 0.00 0.00 RG","0 J","1.00 w","0 j","0.00 0.00 0.00 rg","1.00 0.00 0.00 RG","0 J","1.00 w","0 j","20.000 821.890 m","170.000 821.890 l","170.000 -2178.110 l","20.000 -2178.110 l","20.000 821.890 l","170.000 821.890 l","20.000 821.890 l","S","0.00 0.00 0.00 rg","1.00 0.00 0.00 RG","0 J","1.00 w","0 j","20.000 1663.780 m","170.000 1663.780 l","170.000 -1336.220 l","20.000 -1336.220 l","20.000 1663.780 l","170.000 1663.780 l","20.000 1663.780 l","S","0.00 0.00 0.00 rg","1.00 0.00 0.00 RG","0 J","1.00 w","0 j","20.000 2505.670 m","170.000 2505.670 l","170.000 -494.330 l","20.000 -494.330 l","20.000 2505.670 l","170.000 2505.670 l","20.000 2505.670 l","S","0.00 0.00 0.00 rg","1.00 0.00 0.00 RG","0 J","1.00 w","0 j","20.000 3347.560 m","170.000 3347.560 l","170.000 347.560 l","20.000 347.560 l","20.000 3347.560 l","170.000 3347.560 l","20.000 3347.560 l","S","0.00 G","0.00 0.00 0.00 rg","0.00 G","0 J","1.00 w","0 j","180.000 821.890 m","330.000 821.890 l","330.000 -2178.110 l","180.000 -2178.110 l","180.000 821.890 l","330.000 821.890 l","180.000 821.890 l","S","0.00 0.00 0.00 rg","0.00 G","0 J","1.00 w","0 j","180.000 1663.780 m","330.000 1663.780 l","330.000 -1336.220 l","180.000 -1336.220 l","180.000 1663.780 l","330.000 1663.780 l","180.000 1663.780 l","S","0.00 0.00 0.00 rg","0.00 G","0 J","1.00 w","0 j","180.000 2505.670 m","330.000 2505.670 l","330.000 -494.330 l","180.000 -494.330 l","180.000 2505.670 l","330.000 2505.670 l","180.000 2505.670 l","S","0.00 0.00 0.00 rg","0.00 G","0 J","1.00 w","0 j","180.000 3347.560 m","330.000 3347.560 l","330.000 347.560 l","180.000 347.560 l","180.000 3347.560 l","330.000 3347.560 l","180.000 3347.560 l","S"])
    });
    
    it('context2d autoPaging: text', () => {
        var doc = new jsPDF('p', 'pt', 'a4');
        var ctx = doc.context2d;
		doc.context2d.autoPaging = true;

        var writeArray = [];
        doc.__private__.setCustomOutputDestination(writeArray);
        
        ctx.fillText('test', 0,1000)
        
        
        expect(writeArray).toEqual(["0.20 w","0 G","0.00 0.00 0.00 rg","0.00 G","0 J","1.00 w","0 j","BT\n/F1 10 Tf\n11.50 TL\n0.000 0.000 0.000 rg\n0.00 683.78 Td\n(test) Tj\nET"])
    });
});