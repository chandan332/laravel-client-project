let observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry);
        if (entry.isIntersecting) {
            entry.target.classList.add("show");
            observer.unobserve(entry);
        }
    });
});

document.querySelectorAll(".animate").forEach((items) => {
    observer.observe(items);
});
