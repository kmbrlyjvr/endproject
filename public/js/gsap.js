
    var tl = new TimelineLite();

    tl.staggerFrom("section", 2, { x: -2000, opacity:1,}, 0.25);

    tl.staggerFrom(".main-budgetrechner .budgetrechner li", 3, { x: -1500, opacity:1,}, 0.5);
    tl.staggerFrom(".checklist_item", 3, { x: -1500, opacity:1,}, 0.25);
    