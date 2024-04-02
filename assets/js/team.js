function openModal(id) {
    var ids = "teams" + id;
    const team = document.getElementById(ids);
    team.style.display = "block";
}

function closes(id) {
    var ids = "teams" + id;
    const teamclose = document.getElementById(ids);
    teamclose.style.display = "none";
}

function prev(id, rows) {
    current = id;
    row = rows;
    if (id == 1) {
        id = rows;
    }
    else {
        id = id - 1;
    }
    var ids = "teams" + current;
    const teamclose = document.getElementById(ids);
    teamclose.style.display = "none";
    openModal(id);
}

function next(id, rows) {
    current = id;
    row = rows;
    if (id == rows) {
        id = 1;
    }
    else {
        id = id + 1;
    }
    var ids = "teams" + current;
    const teamclose = document.getElementById(ids);
    teamclose.style.display = "none";
    openModal(id);
}
