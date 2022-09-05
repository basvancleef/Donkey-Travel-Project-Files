<template>
  <div>
    <Particles id="tsparticles" :options="options" :particles-init="particlesInit" />
  </div>
</template>

<script>
import { loadFull } from "tsparticles";
export default {
  data() {
    return {
      options: {
        fullScreen: {
          zIndex: 1,
        },
        duration: 4500,
        emitters: [
          {
            position: {
              x: 0,
              y: 30,
            },
            rate: {
              quantity: 5,
              delay: 0.15,
              duration: 0.5,
            },
            particles: {
              move: {
                direction: "top-right",
                outModes: {
                  top: "none",
                  left: "none",
                  default: "destroy",
                  duration: 0.5,
                },
              },
            },
          },
          {
            position: {
              x: 100,
              y: 30,
            },
            rate: {
              quantity: 5,
              delay: 0.15,
              duration: 0.5,
            },
            particles: {
              move: {
                direction: "top-left",
                outModes: {
                  top: "none",
                  right: "none",
                  default: "destroy",
                  duration: 0.5,
                },
              },
            },
          },
        ],
        particles: {
          color: {
            value: ["#ffffff", "#FF0000", "#FF7F00", "#FFFF00", "#00FF00", "#0000FF", "#4B0082", "#9400D3"],
          },
          move: {
            decay: 0.05,
            direction: "top",
            enable: true,
            duration: 0.5,
            gravity: {
              enable: true,
            },
            outModes: {
              top: "none",
              default: "destroy",
              duration: 0.5,
            },
            speed: {
              min: 10,
              max: 50,
            },
          },
          number: {
            value: 0,
          },
          opacity: {
            value: 1,
          },
          rotate: {
            value: {
              min: 0,
              max: 360,
            },
            direction: "random",
            animation: {
              enable: true,
              speed: 30,
              duration: 0.5,
            },
          },
          tilt: {
            direction: "random",
            enable: true,
            duration: 0.5,
            value: {
              min: 0,
              max: 360,
            },
            duration: 0.5,
            animation: {
              enable: true,
              speed: 30,
              duration: 0.5,
            },
          },
          duration: 3,
          size: {
            value: {
              min: 0,
              max: 2,
            },
            animation: {
              enable: true,
              startValue: "min",
              count: 1,
              speed: 16,
              sync: true,
              duration: 0.5,
            },
          },
          roll: {
            darken: {
              enable: true,
              value: 25,
            },
            enable: true,
            speed: {
              min: 5,
              max: 15,
            },
            duration: 0.5,
          },
          wobble: {
            duration: 0.5,
            distance: 30,
            enable: true,
            speed: {
              min: -7,
              max: 7,
            },
          },
          shape: {
            type: ["circle", "square"],
            // type: "character",
            // character: {
            //   value: ["🌙"]
            // },
            options: {
              duration: 0.5,
            },
          },
        },
      },
    };
  },
  methods: {
    particlesInit: async (engine) => {
      await loadFull(engine);
    },
  },
};
</script>
