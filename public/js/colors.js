const OPACITY_BACKGROUND = 0.8;
const OPACITY_BORDER = 1;
const COLORS = {
    record: ['54,162,235', '155,155,155'],
    user: ['238,188,28', '54,162,235', '255,99,132', '155,155,155'],
    severity: ['255,99,132', '153,102,255', '238,188,28', '155,155,155', '75,192,192'],
    project: ['54,162,235', '238,188,28', '75,192,192', '255,99,132', '155,155,155'],
    finding: ['255,99,132', '153,102,255', '238,188,28', '54,162,235', '75,192,192'],
    cost: ['54,162,235', '238,188,28'],
    backlog: ['54,162,235', '238,188,28', '75,192,192', '155,155,155'],
    acceptance: ['238, 188, 28', '75, 192, 192', '255, 99, 132'],
    result: ['255, 99, 132', '75, 192, 192', '155, 155, 155', '153, 102, 255'],
};
const MULTICOLORS = [
    '255,99,132', '238,188,28', '54,162,235', '75,192,192', '153,102,255', '244,143,177', '240,98,146',
    '236,64,122', '206,147,216', '186,104,200', '156,39,176', '224,64,251', '170,0,255', '124,77,255',
    '100,181,246', '33,150,243', '79,195,247', '77,208,225', '132,255,255', '77,182,172', '29,233,182',
    '102,187,106', '105,240,174', '174,213,129', '178,255,89', '212,225,87', '174,234,0', '255,235,59',
    '245,127,23', '255,214,0', '255,109,0', '189,189,189', '144,164,174']
const CHARTCOLORS = ['255,99,132', '238,188,28', '54,162,235', '75,192,192', '153,102,255', '174,234,0',
    '255,109,0', '224,64,251', '132,255,255', '102,187,106', '156,39,176', '144,164,174'];
const RETROMETRO = ["#ea5545", "#f46a9b", "#ef9b20", "#edbf33", "#ede15b", "#bdcf32", "#87bc45", "#27aeef", "#b33dc6"];
const DUTCHFIELD = ["#e60049", "#0bb4ff", "#50e991", "#e6d800", "#9b19f5", "#ffa300", "#dc0ab4", "#b3d4ff", "#00bfa0"]
const SPRINGPASTEL = ["#fd7f6f", "#7eb0d5", "#b2e061", "#bd7ebe", "#ffb55a", "#ffee65", "#beb9db", "#fdcce5", "#8bd3c7"]
const BLUETOYELLOW = ["#115f9a", "#1984c5", "#22a7f0", "#48b5c4", "#76c68f", "#a6d75b", "#c9e52f", "#d0ee11", "#d0f400"]
const BLUES = ["#0000b3", "#0010d9", "#0020ff", "#0040ff", "#0060ff", "#0080ff", "#009fff", "#00bfff", "#00ffff"]
const BLUESTOREDS = ["#1984c5", "#22a7f0", "#63bff0", "#a7d5ed", "#e2e2e2", "#e1a692", "#de6e56", "#e14b31", "#c23728"]
const PINKTOFOAM = ["#54bebe", "#76c8c8", "#98d1d1", "#badbdb", "#dedad2", "#e4bcad", "#df979e", "#d7658b", "#c80064"]


function getColors(group, opacity) {
    var result = Array();
    COLORS[group].forEach((color) => result.push('rgba(' + color + "," + opacity + ")"));
    return result;

}

function getChartColorsBorder(number) {
    var result = Array();
    for (i = 0; i < number; i++) {
        result.push('rgba(' + CHARTCOLORS[i] + "," + OPACITY_BORDER + ")");
    }
    return result;

}

function getColorsBorderRandom(number) {
    var result = Array();
    for (i = 0; i < number; i++) {
        result.push('rgba(' + MULTICOLORS[Math.floor(Math.random() * 34)] + "," + OPACITY_BORDER + ")");
    }
    return result;

}

function getColorsWithOpacity(src, opacity) {
    var result = Array();
    for (i = 0; i < src.length; i++) {
        result.push(src[i].replace(",1)", "," + opacity + ")"));
    }
    return result;
}
