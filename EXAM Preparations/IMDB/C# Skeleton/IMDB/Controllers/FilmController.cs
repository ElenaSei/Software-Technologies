namespace IMDB.Controllers
{
    using Microsoft.AspNetCore.Mvc;
    using System.Collections.Generic;
    using System.Linq;
    using Models;

    public class FilmController : Controller
    {
        private readonly IMDBDbContext dbContext;

        public FilmController(IMDBDbContext dbContext)
        {
            this.dbContext = dbContext;
        }

        [HttpGet]
        [Route("")]
        public IActionResult Index()
        {
            List<Film> films = dbContext.Films.ToList();

            return View(films);
        }

        [HttpGet]
        [Route("/create")]
        public IActionResult Create()
        {
            return View();
        }

        [HttpPost]
        [Route("/create")]
        public IActionResult Create(Film film)
        {
            dbContext.Update(film);
            dbContext.SaveChanges();
            return Redirect("/");
        }

        [HttpGet]
        [Route("/edit/{id}")]
        public IActionResult Edit(int? id)
        {
            var film = dbContext.Films.Find(id);

            return View(film);
        }

        [HttpPost]
        [Route("/edit/{id}")]
        public IActionResult Edit(Film film)
        {
            dbContext.Update(film);
            dbContext.SaveChanges();

            return Redirect("/");
        }

        [HttpGet]
        [Route("/delete/{id}")]
        public IActionResult Delete(int? id)
        {
            var film = dbContext.Films.Find(id);

            return View(film);
        }

        [HttpPost]
        [Route("/delete/{id}")]
        public IActionResult Delete(Film film)
        {
            dbContext.Remove(film);
            dbContext.SaveChanges();

            return Redirect("/");
        }
    }
}
