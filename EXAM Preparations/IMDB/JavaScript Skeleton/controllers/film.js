const Film = require('../models').Film;

module.exports = {
	index: (req, res) => {
        Film.findAll().then(films => {
        	res.render("film/index", {"films": films})
        })
	},

	createGet: (req, res) => {
        res.render("film/create");
	},

	createPost: (req, res) => {
        let body = req.body;

        Film.create(body).then(film => {
        	res.redirect("/");
		}).catch(err => {
			console.log(err.message);
		})
	},

	editGet: (req, res) => {
        let id = req.params.id;

        Film.findById(id).then(film => {
        	res.render("film/edit", {"name": film.name,
			"genre": film.genre,
			"director": film.director,
			"year": film.year,
			"id": film.id});
		}).catch(err => {
            console.log(err.message);
        })
	},

	editPost: (req, res) => {
        let id = req.params.id;
        let body = req.body;

        Film.findById(id).then(film => {
		film.updateAttributes(body).then(() => {
		res.redirect("/");
		});
	})
	},

	deleteGet: (req, res) => {
        let id = req.params.id;

        Film.findById(id).then(film => {
            res.render("film/delete", {"name": film.name,
                "genre": film.genre,
                "director": film.director,
                "year": film.year,
                "id": film.id});
        }).catch(err => {
            console.log(err.message);
        })
	},

	deletePost: (req, res) => {
        let id = req.params.id;

        Film.findById(id).then(film => {
        	film.destroy().then(() => {
        		res.redirect("/");
			})
		});
	}
};